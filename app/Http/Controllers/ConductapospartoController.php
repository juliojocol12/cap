<?php

namespace App\Http\Controllers;

use App\Models\conductaposparto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConductapospartoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-conductapostparto | crear-conductapostparto | editar-conductapostparto | borrar-conductapostparto', ['only'=>['index']]);
         $this->middleware('permission:crear-conductapostparto', ['only' => ['create','store']]);
         $this->middleware('permission:editar-conductapostparto', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-conductapostparto', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductapostpartos = conductaposparto::paginate(10);
        return view('conductapostparto.index',compact('conductapostpartos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conductapostparto.crear');
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
            'SulfatoFerroso' => 'required|TextoRule3',
            'AcidoFolico' => 'required|TextoRule3',
            'VacuncacionTdapMadre' => 'required|TextoRule3',
            'Medicamento' => 'required|TextoRule3',
        ]);
    
        conductaposparto::create($request->all());
    
        return redirect()->route('conductaposparto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\conductaposparto  $conductaposparto
     * @return \Illuminate\Http\Response
     */
    public function show(conductaposparto $conductaposparto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\conductaposparto  $conductaposparto
     * @param  int  $idConductaPospartos
     * @return \Illuminate\Http\Response
     */
    public function edit($idConductaPospartos)
    {
        $conductapostparto = conductaposparto::find($idConductaPospartos);
        return view('conductapostparto.editar', compact('conductapostparto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idConductaPospartos
     * @param  \App\Models\conductaposparto  $conductaposparto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idConductaPospartos)
    {
        request()->validate([
            'SulfatoFerroso' => 'required|TextoRule3',
            'AcidoFolico' => 'required|TextoRule3',
            'VacuncacionTdapMadre' => 'required|TextoRule3',
            'Medicamento' => 'required|TextoRule3',
        ]);
    
        $input = $request->all();
        $conductapostparto = conductaposparto::find($idConductaPospartos);
        $conductapostparto->update($input);
        return redirect()->route('conductaposparto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\conductaposparto  $conductapostparto
     * @param  int  $idConductaPospartos
     * @return \Illuminate\Http\Response
     */
    public function destroy($idConductaPospartos)
    {
        conductaposparto::find($idConductaPospartos)->delete();
        return redirect()->route('conductaposparto.index');
    }
}
