<?php

namespace App\Http\Controllers;

use App\Models\Pueblo;
use Illuminate\Http\Request;

class PuebloController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-pueblo', ['only'=>['index']]);
        $this->middleware('permission:crear-pueblo', ['only'=>['create','store']]);
        $this->middleware('permission:editar-pueblo', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-pueblo', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pueblos = Pueblo::where('Estado','Si')->paginate(10);
        return view('pueblos.index', compact('pueblos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pueblos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'Nombre' => 'required|TextoRule1|Unique:pueblos',
            'Estado',
        ]);
        
        Pueblo::create($request->all());
        return redirect()->route('pueblos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pueblo  $pueblo
     * @param  int  $idPueblo
     * @return \Illuminate\Http\Response
     */
    public function show($idPueblo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pueblo  $pueblo
     * @param  int  $idPueblo
     * @return \Illuminate\Http\Response
     */
    public function edit($idPueblo)
    {
        $pueblo = Pueblo::find($idPueblo);
        return view ('pueblos.editar', compact('pueblo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $idPueblo
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pueblo  $pueblo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPueblo)
    {
        request()->validate([
            'Nombre' => 'required|TextoRule1|Unique:pueblos',
            'Estado',
        ]);
        $input = $request->all();
        $pueblo = Pueblo::find($idPueblo);
        $pueblo->update($input);
        return redirect()->route('pueblos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pueblo  $pueblo
     * @param  int  $idPueblo
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPueblo)
    {
        $pueblos = Pueblo::findOrFail($idPueblo);
        $pueblos->Estado='No';
        $pueblos->update();
        return redirect()->route('pueblos.index');
    }
}
