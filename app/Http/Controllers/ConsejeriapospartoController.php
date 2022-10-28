<?php

namespace App\Http\Controllers;

use App\Models\consejeriaposparto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsejeriapospartoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-conserjeriaposparto | crear-conserjeriaposparto | editar-conserjeriaposparto | borrar-conserjeriaposparto', ['only'=>['index']]);
         $this->middleware('permission:crear-conserjeriaposparto', ['only' => ['create','store']]);
         $this->middleware('permission:editar-conserjeriaposparto', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-conserjeriaposparto', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conserjeriapospartos = consejeriaposparto::paginate(10);
        return view('conserjeriaposparto.index',compact('conserjeriapospartos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conserjeriaposparto.crear');
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
            'LactanciaMaternaExclusiva' => 'required|TextoRule1',
            'PlanificacionFamiliarPosparto' => 'required|TextoRule1',
            'AlimentacionMadreLactante' => 'required|TextoRule1',
            'LactanciaMaternaVIH' => 'required|TextoRule1',
            'MujerVIH' => 'required|TextoRule1',
        ]);
    
        consejeriaposparto::create($request->all());
    
        return redirect()->route('conserjeriaposparto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\consejeriaposparto  $consejeriaposparto
     * @return \Illuminate\Http\Response
     */
    public function show(consejeriaposparto $consejeriaposparto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\consejeriaposparto  $consejeriaposparto
     * @param  int  $idConsejeriaPospartos
     * @return \Illuminate\Http\Response
     */
    public function edit($idConsejeriaPospartos)
    {
        $consejeriaposparto = consejeriaposparto::find($idConsejeriaPospartos);
        return view('conserjeriaposparto.editar', compact('consejeriaposparto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $idConsejeriaPospartos
     * @param  \App\Models\consejeriaposparto  $consejeriaposparto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idConsejeriaPospartos)
    {
        $this->validate($request,[
            'LactanciaMaternaExclusiva' => 'required|TextoRule1',
            'PlanificacionFamiliarPosparto' => 'required|TextoRule1',
            'AlimentacionMadreLactante' => 'required|TextoRule1',
            'LactanciaMaternaVIH' => 'required|TextoRule1',
            'MujerVIH' => 'required|TextoRule1',
        ]);

        $input = $request->all();
        $consejeriaposparto = consejeriaposparto::find($idConsejeriaPospartos);
        $consejeriaposparto->update($input);
        return redirect()->route('conserjeriaposparto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\consejeriaposparto  $consejeriaposparto
     * @param  int  $idConsejeriaPospartos
     * @return \Illuminate\Http\Response
     */
    public function destroy($idConsejeriaPospartos)
    {
        consejeriaposparto::find($idConsejeriaPospartos)->delete();
        return redirect()->route('conserjeriaposparto.index');
    }
}
