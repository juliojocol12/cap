<?php

namespace App\Http\Controllers;

use App\Models\fcprenatalpostparto;
use App\Models\datospersonalespaciente;
use App\Models\establecimientosaludo;
use Illuminate\Http\Request;

class FcprenatalpostpartoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-fcprenatalpostparto | crear-fcprenatalpostparto | editar-fcprenatalpostparto | borrar-fcprenatalpostparto', ['only'=>['index']]);
        $this->middleware('permission:crear-fcprenatalpostparto', ['only'=>['create','store']]);
        $this->middleware('permission:editar-fcprenatalpostparto', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-fcprenatalpostparto', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fcprenatalpostpartos = fcprenatalpostparto::paginate(10);
        return view('fcprenatalpostpartos.index', compact('fcprenatalpostpartos'));
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
        return view ('fcprenatalpostpartos.crear')->with('establecimientosaludos',$establecimientosaludos)->with('datospacientes',$datospacientes);
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
            'ExpedienteNo' => 'require|NumeroRule',
            'Fecha',
            'DatosPersonalesPacientes_id' => 'require|NumeroRule',
            'EstablecimientoSalud_id' => 'require|NumeroRule',
            'HemorragiaVaginal',
            'DolordeCabeza',
            'VisionBorrosa',
            'Convulsion',
            'DolorAbdominal',
            'PresionArterial',
            'Fiebre',
            'PresentacionesFetales',
            'RegistrodeReferencia' => 'require|TextoRule3',
            'MotivoConsulta',
            'HistoriaEnfermedadActual' => 'require|TextoRule3',
            'FechaUltimaRegla',
            'NoGestas',
            'Partos',
            'Aborto',
            'AbortoConsecutivo',
            'NoLIU',
            'NacidosVivos',
            'NacidosMuertos',
            'HijosVivos',
            'HijosMuertos',
            'NoCesareas',
            'EmbarazoMultiples',
            'FechaUltimoParto',
            'NacidosAntesOchoMeses',
            'PreEclampsia',
            'UltimoRNPesoCincolb',
            'UltimoRNPesoSietelb',
            'DeteccionCancerCervix' => 'require|TextoRule1',
            'FechaDeteccionCancer',
            'ResultadoNormal',
            'MetodoPlanificacionFamiliar',
            'CualMetodoPlanificacionF' => 'require|TextoRule1' ,
            'AsmaBronquial',
            'HipertensionArterial',
            'Cancer',
            'ITS',
            'Chagas',
            'TomaMedicamentos',
            'TrastornoPiscoSocial',
            'ViolenciaGenero',
            'Diabetes',
            'Cardiopatia',
            'Tuberculosis',
            'Neuropatia',
            'InfeccionesUrinarias',
            'ViolenciaInrtraFamiliar',
            'TipoSangre',
            'Quirurgicos' => 'require|TextoRule1',
            'Fuma',
            'BebidasAlcoholicas',
            'ConsumoDrogas',
            'AntecedentesVacunas',
            'DosisVacuna',
            'FechaUltimaDosis',
            'SR',
            'OtrosAntecedentes' => 'require|TextoRule1',
        ]);
        
        fcprenatalpostparto::create($request->all());

        return redirect()->route('fcprenatalpostpartos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fcprenatalpostparto  $fcprenatalpostparto
     * @return \Illuminate\Http\Response
     */
    public function show(fcprenatalpostparto $fcprenatalpostparto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fcprenatalpostparto  $fcprenatalpostparto
     * @param  int  $idFCPrenatalPostpartos
     * @return \Illuminate\Http\Response
     */
    public function edit($idFCPrenatalPostpartos)
    {
        //
        $fcprenatalpostparto = fcprenatalpostparto::find($idFCPrenatalPostpartos);

        $datospacientes = datospersonalespaciente::all();
        $establecimientosaludos = establecimientosaludo::all();
        return view ('fcprenatalpostpartos.editar', compact('fcprenatalpostparto'))->with('establecimientosaludos',$establecimientosaludos)->with('datospacientes',$datospacientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fcprenatalpostparto  $fcprenatalpostparto
     *  @param  int  $idFCPrenatalPostpartos     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idFCPrenatalPostpartos)
    {
        //
        request()->validate([
            'ExpedienteNo' => 'require | NumeroRule',
            'Fecha',
            'DatosPersonalesPacientes_id' => 'require | NumeroRule',
            'EstablecimientoSalud_id' => 'require|NumeroRule',
            'HemorragiaVaginal',
            'DolordeCabeza',
            'VisionBorrosa',
            'Convulsion',
            'DolorAbdominal',
            'PresionArterial',
            'Fiebre',
            'PresentacionesFetales',
            'RegistrodeReferencia' => 'require|TextoRule3',
            'MotivoConsulta',
            'HistoriaEnfermedadActual' => 'require|TextoRule3',
            'FechaUltimaRegla',
            'NoGestas',
            'Partos',
            'Aborto',
            'AbortoConsecutivo',
            'NoLIU',
            'NacidosVivos',
            'NacidosMuertos',
            'HijosVivos',
            'HijosMuertos',
            'NoCesareas',
            'EmbarazoMultiples',
            'FechaUltimoParto',
            'NacidosAntesOchoMeses',
            'PreEclampsia',
            'UltimoRNPesoCincolb',
            'UltimoRNPesoSietelb',
            'DeteccionCancerCervix' => 'require|TextoRule1',
            'FechaDeteccionCancer',
            'ResultadoNormal',
            'MetodoPlanificacionFamiliar',
            'CualMetodoPlanificacionF' => 'require|TextoRule1' ,
            'AsmaBronquial',
            'HipertensionArterial',
            'Cancer',
            'ITS',
            'Chagas',
            'TomaMedicamentos',
            'TrastornoPiscoSocial',
            'ViolenciaGenero',
            'Diabetes',
            'Cardiopatia',
            'Tuberculosis',
            'Neuropatia',
            'InfeccionesUrinarias',
            'ViolenciaInrtraFamiliar',
            'TipoSangre',
            'Quirurgicos' => 'require|TextoRule1',
            'Fuma',
            'BebidasAlcoholicas',
            'ConsumoDrogas',
            'AntecedentesVacunas',
            'DosisVacuna',
            'FechaUltimaDosis',
            'SR',
            'OtrosAntecedentes' => 'require|TextoRule1',
        ]);
        $input = $request->all();
        $fcprenatalpostparto = infante::find($idFCPrenatalPostpartos);
        $fcprenatalpostparto->update($input);
        return redirect()->route('fcprenatalpostpartos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fcprenatalpostparto  $fcprenatalpostparto
     * @param  int  $idFCPrenatalPostpartos
     * @return \Illuminate\Http\Response
     */
    public function destroy($idFCPrenatalPostpartos)
    {
        //
        fcprenatalpostparto::find($idFCPrenatalPostpartos)->delete();
        return redirect()->route('fcprenatalpostpartos.index')->with('status');
    }
}
