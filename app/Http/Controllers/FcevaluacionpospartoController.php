<?php

namespace App\Http\Controllers;

use App\Models\fcevaluacionposparto;
use App\Models\datospersonalespaciente;
use App\Models\establecimientosaludo;
use App\Models\fcprenatalpostparto;
use App\Models\User;
use App\Models\personale;
use Illuminate\Http\Request;

class FcevaluacionpospartoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-fcevaluacionposparto | crear-fcevaluacionposparto | editar-fcevaluacionposparto | borrar-fcevaluacionposparto', ['only'=>['index']]);
        $this->middleware('permission:crear-fcevaluacionposparto', ['only'=>['create','store']]);
        $this->middleware('permission:editar-fcevaluacionposparto', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-fcevaluacionposparto', ['only'=>['destroy']]);
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

        $fcevaluacionpospartos = fcevaluacionposparto::select('idFCEvaluacionPosparto','FCPrenatalPostparto_id','FechaEvaluacionPosparto','NombresPaciente','ApellidosPaciente','CUI','HemorragiaVaginal','DolordeCabeza','VisionBorrosa','Convulsion','DolorAbdominal','PresionArterialSignos','Fiebre','Coagulos','RegistroReferencia','NombreServicio','DiasDespuesParto','EstablecimientoSalud_id','Personal_idD',
        'HeridaOperatoria','InvolucionUterina','PresionArterial','FrecuenciaCardiaca','Temperatura',
        'ExamenMamas','ExamenGinecologico','LactanciaMaterna','PorqueNoLactanciaMaterna','Diagnostico',
        'ConductaTratamiento','Usuario_id','SulfatoFerroso','AcidoFolico','OtroMedicamento','Tdap','ConsejeriaPF_Posparto','ConsejeriaLactanciaAlimentacion','ConsejeriaLactanciaMujerVIH','ConsejeriaMujerVIH',)
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','fcevaluacionpospartos.DatosPersonalesPacientes_id')
        ->where('CUI','LIKE','%'.$texto.'%')
        ->paginate(10);
        return view('pospartos.index', compact('fcevaluacionpospartos','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datospacientes = datospersonalespaciente::all();
        $establecimientosaludos = establecimientosaludo::all();
        $fcprenatalpostpartos = fcprenatalpostparto::all();
        $usuarios = User::all();
        $personaless = personale::all();

        return view ('pospartos.crear')->with('establecimientosaludos',$establecimientosaludos)->with('datospacientes',$datospacientes)->with('fcprenatalpostpartos',$fcprenatalpostpartos)->with('usuarios',$usuarios)->with('personaless',$personaless);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fcevaluacionposparto  $fcevaluacionposparto
     * @return \Illuminate\Http\Response
     */
    public function show(fcevaluacionposparto $fcevaluacionposparto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fcevaluacionposparto  $fcevaluacionposparto
     * @return \Illuminate\Http\Response
     */
    public function edit(fcevaluacionposparto $fcevaluacionposparto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fcevaluacionposparto  $fcevaluacionposparto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fcevaluacionposparto $fcevaluacionposparto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fcevaluacionposparto  $fcevaluacionposparto
     * @return \Illuminate\Http\Response
     */
    public function destroy(fcevaluacionposparto $fcevaluacionposparto)
    {
        //
    }
}
