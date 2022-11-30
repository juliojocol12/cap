<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;

class UsuarioController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-usuario', ['only'=>['index']]);
        $this->middleware('permission:crear-usuario', ['only'=>['create','store']]);
        $this->middleware('permission:editar-usuario', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-usuario', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //paginacion
        $texto = trim($request->get('texto'));
        $Nombre = trim($request->get('Nombre'));

        $usuarios = User::select('id','name','email','Estado')
        ->where('name','LIKE','%'.$texto.'%')
        ->where('email','LIKE','%'.$Nombre.'%')
        ->where('Estado','Si')
        ->paginate(10); 
        return view('usuarios.index', compact('usuarios','texto','Nombre'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role::where('Estado','Si')->pluck('name', 'name');
        return view('usuarios.crear', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required|UsuarioRule1|unique:users,name|min:3|max:20',
            'email' => 'required|email|unique:users,email|CorreoRule1|min:7|max:191',
            'password' => 'required|same:confirm-password|ContraseñaRule',
            'Estado',
            'roles' => 'required',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('personal.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::find($id);
        $roles = Role::where('Estado','Si')->pluck('name', 'name');
        $userRole = $user->roles->pluck('name', 'name')->all();
        return view('usuarios.editar', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            if ('name' === 'name')
            {
                $this->validate($request, [
                    'name' => 'required|UsuarioRule1|max:45',
                    'email' => 'email|CorreoRule1|max:191'.$id,
                    'password' => 'max:12|ContraseñaRule',
                    'Estado',
                    'roles' => 'required',
                    ]);
                }
   
            $input = $request->all();
    if (!empty($input['password'])){
        $input['password'] = Hash::make($input['password']);
    }
    else{
        $input = Arr::except($input, array('password'));
    }
    $user = User::find($id);
    $user->update($input);
    DB::table('model_has_roles')->where('model_id', $id)->delete();
    $user->assignRole($request->input('roles'));
    return redirect()->route('usuarios.index');
    }
   
    catch (\Throwable $th) {
        Log::debug($th -> getMessage());
        return $this->validate($request, [
            'name' => 'required|UsuarioRule1|max:45|unique:users,name',
            'email' => 'email|CorreoRule1|max:191'.$id,
            'password' => 'max:12|ContraseñaRule',
            'Estado',
            'roles' => 'required',
        ]);
   
        $input = $request->all();
        if (!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }
        else{
            $input = Arr::except($input, array('password'));
        }
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('usuarios.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = User::findOrFail($id);
        $usuarios->Estado='No';
        $usuarios->update();
        return redirect()->route('usuarios.index')->with('status');
    }
}
