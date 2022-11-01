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
        $personales = primercontrolpostparto::all();
        return view('primercontrolpostparto.index',compact('primercontrolpostpartos'))->with('$personales',personales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
            'NombreServicio' => 'required|TextoRule1',
            'DiasDespuesParto' => 'required|NumeroRule',
            'EstablecimientoSalud_id' => 'required',
            'Personal_idD' => 'required',
            'HeridaOperatoria' => 'required|TextoRule3',
            'InvolucionUterina' => 'required|TextoRule3',
            'PresionArterial' => 'required|TextoRule3',
            'FrecuenciaCardiaca' => 'required|TextoRule3',
            'Temperatura' => 'required|TextoRule3',
            'ExamenMamas' => 'required|TextoRule1',
            'ExamenGinecologico' => 'required|TextoRule3',
            'LactanciaMaterna' => 'required|TextoRule1',
            'PorqueNoLactanciaMaterna' => 'TextoRule4',
            'Diagnostico' => 'required|TextoRule3',
            'ConductaTratamiento' => 'required|TextoRule3',
            'Personal_id' => 'required',
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
            'NombreServicio' => 'required|TextoRule1',
            'DiasDespuesParto' => 'required|NumeroRule',
            'DondeAtendioParto' => 'required',
            'QuienAtendioParto' => 'required',
            'HeridaOperatoria' => 'required|TextoRule3',
            'InvolucionUterina' => 'required|TextoRule3',
            'PresionArterial' => 'required|TextoRule3',
            'FrecuenciaCardiaca' => 'required|TextoRule3',
            'Temperatura' => 'required|TextoRule3',
            'ExamenMamas' => 'required|TextoRule1',
            'ExamenGinecologico' => 'required|TextoRule3',
            'LactanciaMaterna' => 'required|TextoRule1',
            'PorqueNoLactanciaMaterna' => 'TextoRule4',
            'Diagnostico' => 'required|TextoRule3',
            'ConductaTratamiento' => 'required|TextoRule3',
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
    public function destroy($idPrimerControlPostpartos)
    {
        primercontrolpostparto::find($idPrimerControlPostpartos)->delete();
        return redirect()->route('primercontrolpostparto.index')->with('status');
    }
}
