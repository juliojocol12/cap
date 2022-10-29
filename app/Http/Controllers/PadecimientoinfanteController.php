<?php

namespace App\Http\Controllers;

use App\Models\padecimientoinfante;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PadecimientoinfanteController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-padecimientoinfate | crear-padecimientoinfate | editar-padecimientoinfate | borrar-padecimientoinfate', ['only'=>['index']]);
         $this->middleware('permission:crear-padecimientoinfate', ['only' => ['create','store']]);
         $this->middleware('permission:editar-padecimientoinfate', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-padecimientoinfate', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $padecimientoinfantes = padecimientoinfante::paginate(10);
        return view('padecimientoinfante.index',compact('padecimientoinfantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('padecimientoinfante.crear');
    
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
            'TipoControl' => 'required|TextoRule3',
            'FechaControl' => 'required',
            'DescripcionControl' => 'required',
        ]);
    
        padecimientoinfante::create($request->all());
    
        return redirect()->route('padecimientoinfante.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\padecimientoinfante  $padecimientoinfante
     * @return \Illuminate\Http\Response
     */
    public function show(padecimientoinfante $padecimientoinfante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\padecimientoinfante  $padecimientoinfante
     * @param  int  $idPadecimientoInfantes
     * @return \Illuminate\Http\Response
     */
    public function edit($idPadecimientoInfantes)
    {
        $padecimientoinfante = padecimientoinfante::find($idPadecimientoInfantes);
        return view('padecimientoinfante.editar', compact('padecimientoinfante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idPadecimientoInfantes
     * @param  \App\Models\padecimientoinfante  $padecimientoinfante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPadecimientoInfantes)
    {
        $this->validate($request,[
            'TipoControl' => 'required|max:45|TextoRule3',
            'FechaControl' => 'required',
            'DescripcionControl' => 'required|max:45',
        ]);

        $input = $request->all();
        $padecimientoinfante = padecimientoinfante::find($idPadecimientoInfantes);
        $padecimientoinfante->update($input);
        return redirect()->route('padecimientoinfante.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\padecimientoinfante  $padecimientoinfante
     * @param  int  $idPadecimientoInfantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPadecimientoInfantes)
    {
        padecimientoinfante::find($idPadecimientoInfantes)->delete();
        return redirect()->route('padecimientoinfante.index')->with('status');
    }
}
