<?php

namespace App\Http\Controllers;

use App\Models\primercontrolpostparto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\establecimientosaludo;
use App\Models\personale;

class PrimercontrolpostpartoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-primercontrolpostparto | crear-primercontrolpostparto | editar-primercontrolpostparto | borrar-primercontrolpostparto', ['only'=>['index']]);
         $this->middleware('permission:crear-primercontrolpostparto', ['only' => ['create','store']]);
         $this->middleware('permission:editar-primercontrolpostparto', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-primercontrolpostparto', ['only' => ['destroy']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $primercontrolpostpartos = primercontrolpostparto::paginate(10);
        return view('primercontrolpostparto.index',compact('primercontrolpostpartos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Dpersonales = personale::all();
        $Destablecimientos = establecimientosaludo::all();
        return view('primercontrolpostparto.crear')->with('Dpersonales',$Dpersonales)->with('Destablecimientos',$Destablecimientos);
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
            'NombreServicio' => 'required|max:45|TextoRule1',
            'DiasDespuesParto' => 'required|max:6|NumeroRule',
            'DondeAtendioParto' => 'required|max:15|TextoRule1',
            'QuienAtendioParto' => 'required|max:30|TextoRule1',
            'HeridaOperatoria' => 'required|max:45|TextoRule3',
            'InvolucionUterina' => 'required|max:25|TextoRule3',
            'PresionArterial' => 'required|max:20|TextoRule3',
            'FrecuenciaCardiaca' => 'required|max:20|TextoRule3',
            'Temperatura' => 'required|max:10|TextoRule3',
            'ExamenMamas' => 'required|max:75|TextoRule1',
            'ExamenGinecologico' => 'required|max:300|TextoRule3',
            'LactanciaMaterna' => 'required|max:2|TextoRule1',
            'PorqueNoLactanciaMaterna' => 'max:45|TextoRule3',
            'Diagnostico' => 'required|max:200|TextoRule3',
            'ConductaTratamiento' => 'required|max:200|TextoRule3',
        ]);
    
        primercontrolpostparto::create($request->all());
    
        return redirect()->route('primercontrolpostparto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\primercontrolpostparto  $primercontrolpostparto
     * @return \Illuminate\Http\Response
     */
    public function show(primercontrolpostparto $primercontrolpostparto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\primercontrolpostparto  $primercontrolpostparto
     * @param  int  $idPrimerControlPostpartos
     * @return \Illuminate\Http\Response
     */
    public function edit($idPrimerControlPostpartos)
    {
        $primercontrolpostparto = primercontrolpostparto::find($idPrimerControlPostpartos);
        return view('primercontrolpostparto.editar', compact('primercontrolpostparto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idPrimerControlPostpartos
     * @param  \App\Models\primercontrolpostparto  $primercontrolpostparto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPrimerControlPostpartos)
    {
        $this->validate($request,[
            'NombreServicio' => 'required|max:45|TextoRule1',
            'DiasDespuesParto' => 'required|max:6|NumeroRule',
            'DondeAtendioParto' => 'required|max:15|TextoRule1',
            'QuienAtendioParto' => 'required|max:30|TextoRule1',
            'HeridaOperatoria' => 'required|max:45|TextoRule3',
            'InvolucionUterina' => 'required|max:25|TextoRule3',
            'PresionArterial' => 'required|max:20|TextoRule3',
            'FrecuenciaCardiaca' => 'required|max:20|TextoRule3',
            'Temperatura' => 'required|max:10|TextoRule3',
            'ExamenMamas' => 'required|max:75|TextoRule1',
            'ExamenGinecologico' => 'required|max:300|TextoRule3',
            'LactanciaMaterna' => 'required|max:2|TextoRule1',
            'PorqueNoLactanciaMaterna' => 'max:45|TextoRule3',
            'Diagnostico' => 'required|max:200|TextoRule3',
            'ConductaTratamiento' => 'required|max:200|TextoRule3',
        ]);

        $input = $request->all();
        $primercontrolpostparto = primercontrolpostparto::find($idPrimerControlPostpartos);
        $primercontrolpostparto->update($input);
        return redirect()->route('primercontrolpostparto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\primercontrolpostparto  $primercontrolpostparto
     * @param  int  $idPrimerControlPostpartos
     * @return \Illuminate\Http\Response
     */
    public function destroy(primercontrolpostparto $primercontrolpostparto)
    {
        primercontrolpostparto::find($idPrimerControlPostpartos)->delete();
        return redirect()->route('primercontrolpostparto.index');
    }
}
