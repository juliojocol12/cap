<?php

namespace App\Http\Controllers;

use App\Models\controlposparto;

use App\Models\fcevaluacionposparto; 
use App\Models\User;
use App\Models\datospersonalespaciente;

use Illuminate\Http\Request;

class ControlpospartoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-controlposparto', ['only'=>['index']]);
        $this->middleware('permission:crear-controlposparto', ['only'=>['create','store']]);
        $this->middleware('permission:editar-controlposparto', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-controlposparto', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $texto = trim($request->get('texto'));

        $controlpospartos = controlposparto::select('idControlPosparto','NoControl','FCEvaluacionPosparto_id','SemanasDespuesParto','FechaVisita','InvolucionUterina','ExamenMamas','HeridaOperatiria','ExamenGInecológico','PresionArterial','MMHG','FrecuenciaCardiaca','Temperatura','LactanciaMaterna','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacuncacionTdapMadre','Medicamento','LactanciaMaternaExclusiva','PlanificacionFamiliarPosparto','AlimentacionMadreLactante','LactanciaMaternaVIH','MujerVIH','Usuario_id',)->paginate(10);
        return view('controlpospartos.index', compact('controlpospartos','texto'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $fcevaluacionpospartos = fcevaluacionposparto::all();
        $datospacientes = datospersonalespaciente::all();
        $usuarios = User::all();
        return view ('controlpospartos.crear')->with('fcevaluacionpospartos',$fcevaluacionpospartos)->with('datospacientes',$datospacientes)->with('usuarios',$usuarios);
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
        $this->validate($request,[
            'NoControl',
            'FCEvaluacionPosparto_id',
            'SemanasDespuesParto','FechaVisita',
            'InvolucionUterina',
            'ExamenMamas',
            'HeridaOperatiria',
            'ExamenGInecológico',
            'PresionArterial',
            'MMHG',
            'FrecuenciaCardiaca',
            'Temperatura',
            'LactanciaMaterna',
            'ProblemasDetectados',
            'SulfatoFerroso',
            'AcidoFolico',
            'VacuncacionTdapMadre',
            'Medicamento',
            'LactanciaMaternaExclusiva',
            'PlanificacionFamiliarPosparto',
            'AlimentacionMadreLactante',
            'LactanciaMaternaVIH',
            'MujerVIH',
            'Usuario_id',
        ]);
        
        controlposparto::create($request->all());

        return redirect()->route('pospartos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\controlposparto  $controlposparto
     * @param  int idControlPosparto
     * @return \Illuminate\Http\Response
     */
    public function show($idControlPosparto)
    {
        //
        $controlpospartos = controlposparto::select('idControlPosparto','NoControl','FCEvaluacionPosparto_id','idFCEvaluacionPosparto','SemanasDespuesParto','FechaVisita','InvolucionUterina','ExamenMamas','HeridaOperatiria','ExamenGInecológico','PresionArterial','MMHG','FrecuenciaCardiaca','Temperatura','LactanciaMaterna','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacuncacionTdapMadre','Medicamento','LactanciaMaternaExclusiva','PlanificacionFamiliarPosparto','AlimentacionMadreLactante','LactanciaMaternaVIH','MujerVIH','Usuario_id',)
        ->join('fcevaluacionpospartos', 'fcevaluacionpospartos.idFCEvaluacionPosparto', '=','controlpospartos.FCEvaluacionPosparto_id');


        $controlposparto = controlposparto::find($idControlPosparto);

        $fcevaluacionpospartos = fcevaluacionposparto::all();
        $datospacientes = datospersonalespaciente::all();
        $usuarios = User::all();

        return view ('controlpospartos.show', compact('controlposparto','controlpospartos'))->with('fcevaluacionpospartos',$fcevaluacionpospartos)->with('datospacientes',$datospacientes)->with('usuarios',$usuarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\controlposparto  $controlposparto
     * @param  int idControlPosparto
     * @return \Illuminate\Http\Response
     */
    public function edit($idControlPosparto)
    {
        //
        $controlpospartos = controlposparto::select('idControlPosparto','NoControl','FCEvaluacionPosparto_id','idFCEvaluacionPosparto','SemanasDespuesParto','FechaVisita','InvolucionUterina','ExamenMamas','HeridaOperatiria','ExamenGInecológico','PresionArterial','MMHG','FrecuenciaCardiaca','Temperatura','LactanciaMaterna','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacuncacionTdapMadre','Medicamento','LactanciaMaternaExclusiva','PlanificacionFamiliarPosparto','AlimentacionMadreLactante','LactanciaMaternaVIH','MujerVIH','Usuario_id',)
        ->join('fcevaluacionpospartos', 'fcevaluacionpospartos.idFCEvaluacionPosparto', '=','controlpospartos.FCEvaluacionPosparto_id');


        $controlposparto = controlposparto::find($idControlPosparto);

        $fcevaluacionpospartos = fcevaluacionposparto::all();
        $datospacientes = datospersonalespaciente::all();
        $usuarios = User::all();

        return view ('controlpospartos.editar', compact('controlposparto','controlpospartos'))->with('fcevaluacionpospartos',$fcevaluacionpospartos)->with('datospacientes',$datospacientes)->with('usuarios',$usuarios);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\controlposparto  $controlposparto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idControlPosparto)
    {
        //
        request()->validate([
            'NoControl',
            'FCEvaluacionPosparto_id',
            'SemanasDespuesParto','FechaVisita',
            'InvolucionUterina',
            'ExamenMamas',
            'HeridaOperatiria',
            'ExamenGInecológico',
            'PresionArterial',
            'MMHG',
            'FrecuenciaCardiaca',
            'Temperatura',
            'LactanciaMaterna',
            'ProblemasDetectados',
            'SulfatoFerroso',
            'AcidoFolico',
            'VacuncacionTdapMadre',
            'Medicamento',
            'LactanciaMaternaExclusiva',
            'PlanificacionFamiliarPosparto',
            'AlimentacionMadreLactante',
            'LactanciaMaternaVIH',
            'MujerVIH',
            'Usuario_id',
        ]);
        $input = $request->all();
        $controlposparto = controlposparto::find($idControlPosparto);
        $controlposparto->update($input);
        return redirect()->route('controlpospartos.index');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\controlposparto  $controlposparto
     * @param  int idControlPosparto
     * @return \Illuminate\Http\Response
     */
    public function destroy($idControlPosparto)
    {
        //
        controlposparto::find($idControlPosparto)->delete();
        return redirect()->route('controlpospartos.index')->with('status');
    }
}
