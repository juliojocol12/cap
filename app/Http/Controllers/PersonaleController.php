<?php

namespace App\Http\Controllers;

use App\Models\personale;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PersonaleController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-personal', ['only'=>['index']]);
         $this->middleware('permission:crear-personal', ['only' => ['create','store']]);
         $this->middleware('permission:editar-personal', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-personal', ['only' => ['destroy']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));

        $personales = personale::select('idPersonal','Nombre','CUI','Celular','Telefono','Direccion','Cargo','FechaNacimiento','NivelAcademico','Usuario_id','EstadoCivil','TipoSanguineo')->where('Nombre','LIKE','%'.$texto.'%')
        ->where('Nombre','LIKE','%'.$texto.'%')
        ->orwhere('CUI','LIKE','%'.$texto.'%')
        ->orwhere('Cargo','LIKE','%'.$texto.'%')
        ->orwhere('Celular','LIKE','%'.$texto.'%')
        ->paginate(10);
        return view('personal.index',compact('personales','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::all();
        return view('personal.crear')->with('usuarios',$usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Nombre' => 'required|TextoRule1',
            'CUI' => 'required|NumeroRule|Unique:personales',
            'Celular',
            'Telefono',
            'Direccion' => 'required',
            'Cargo' => 'required|TextoRule1',
            'FechaNacimiento' => 'required',
            'NivelAcademico' => 'TextoRule2',
            'Usuario_id',
            'EstadoCivil' => 'required|TextoRule1',
            'TipoSanguineo' => 'required',
        ]);
    
        personale::create($request->all());
    
        return redirect()->route('personal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personale  $personale
     * @return \Illuminate\Http\Response
     */
    public function show(personale $personale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personale  $personale
     * @param  int  $idPersonal
     * @return \Illuminate\Http\Response
     */
    public function edit($idPersonal)
    {
        $usuarios = User::all();
        $personal = personale::find($idPersonal);
        return view('personal.editar', compact('personal'))->with('usuarios',$usuarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idPersonal
     * @param  \App\Models\personale  $personale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPersonal)
    {
        try {
            if ('CUI' === 'CUI') {
                request()->validate([
                'Nombre' => 'required|TextoRule1',
                'CUI' => 'required|NumeroRule',
                'Celular',
                'Telefono',
                'Direccion' => 'required',
                'Cargo' => 'required|TextoRule1',
                'FechaNacimiento' => 'required',
                'NivelAcademico' => 'TextoRule2',
                'Usuario_id',
                'EstadoCivil' => 'required|TextoRule1',
                'TipoSanguineo' => 'required',
                ]);
                $input = $request->all();
            $personal = personale::find($idPersonal);
            $personal->update($input);
            return redirect()->route('personal.index');
            }
            
        } 
        catch (\Throwable $th) {
            Log::debug($th -> getMessage());
            return request()->validate([
                'Nombre' => 'required|TextoRule1',
                'CUI' => 'required|NumeroRule|Unique:personales',
                'Celular',
                'Telefono',
                'Direccion' => 'required',
                'Cargo' => 'required|TextoRule1',
                'FechaNacimiento' => 'required',
                'NivelAcademico' => 'TextoRule2',
                'Usuario_id',
                'EstadoCivil' => 'required|TextoRule1',
                'TipoSanguineo' => 'required',
            ]);
            $input = $request->all();
            $personal = personale::find($idPersonal);
            $personal->update($input);
            return redirect()->route('personal.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personale  $personale
     * @param  int  $idPersonal
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPersonal)
    {
        personale::find($idPersonal)->delete();
        return redirect()->route('personal.index')->with('status');
    }
}
