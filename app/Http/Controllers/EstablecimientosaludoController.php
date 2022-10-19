<?php

namespace App\Http\Controllers;

use App\Models\establecimientosaludo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstablecimientosaludoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-establecimientosaludo | crear-establecimientosaludo | editar-establecimientosaludo | borrar-establecimientosaludo', ['only'=>['index']]);
         $this->middleware('permission:crear-establecimientosaludo', ['only' => ['create','store']]);
         $this->middleware('permission:editar-establecimientosaludo', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-establecimientosaludo', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $establecimientosaludos = establecimientosaludo::paginate(10);
        return view('establecimientosaludo.index',compact('establecimientosaludos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('establecimientosaludo.crear');
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
            'Nombre' => 'required|max:45|TextoRule1',
            'Direccion' => 'required|max:60',
            'Comunidad' => 'required|max:15|TextoRule1',
            'PuestoSalud' => 'required|max:10|TextoRule1',
        ]);
    
        establecimientosaludo::create($request->all());
    
        return redirect()->route('establecimientosaludo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\establecimientosaludo  $establecimientosaludo
     * @return \Illuminate\Http\Response
     */
    public function show(establecimientosaludo $establecimientosaludo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\establecimientosaludo  $establecimientosaludo
     * @param  int  $idEstablecimientoSaludos
     * @return \Illuminate\Http\Response
     */
    public function edit($idEstablecimientoSaludos)
    {
        $establecimientosaludo = establecimientosaludo::find($idEstablecimientoSaludos);
        return view('establecimientosaludo.editar', compact('establecimientosaludo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idEstablecimientoSaludos
     * @param  \App\Models\establecimientosaludo  $establecimientosaludo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idEstablecimientoSaludos)
    {
        $this->validate($request,[
            'Nombre' => 'required|max:45|TextoRule1',
            'Direccion' => 'required|max:60',
            'Comunidad' => 'required|max:15|TextoRule1',
            'PuestoSalud' => 'required|max:10|TextoRule1',
        ]);

        $input = $request->all();
        $establecimientosaludo = establecimientosaludo::find($idEstablecimientoSaludos);
        $establecimientosaludo->update($input);
        return redirect()->route('establecimientosaludo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\establecimientosaludo  $establecimientosaludo
     * @param  int  $idEstablecimientoSaludos
     * @return \Illuminate\Http\Response
     */
    public function destroy($idEstablecimientoSaludos)
    {
        establecimientosaludo::find($idEstablecimientoSaludos)->delete();
        return redirect()->route('establecimientosaludo.index');
    }
}
