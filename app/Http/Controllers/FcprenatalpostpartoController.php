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
    public function index(Request $request)
    {
        //
        $texto = trim($request->get('texto'));

        $fcprenatalpostpartos = fcprenatalpostparto::select('idFCPrenatalPostpartos','Fecha',
        'NombresPaciente','ApellidosPaciente','CUI','Numerodireccion','idDatosPersonalesPacientes','EstablecimientoSalud_id','HemorragiaVaginal','DolordeCabeza','VisionBorrosa','Convulsion','DolorAbdominal','PresionArterial','Fiebre','PresentacionesFetales','RegistrodeReferencia','MotivoConsulta','HistoriaEnfermedadActual','FechaUltimaRegla','NoGestas','Partos','Aborto','AbortoConsecutivo','NoLIU','NacidosVivos','NacidosMuertos','HijosVivos','HijosMuertos','NoCesareas','EmbarazoMultiples','FechaUltimoParto','NacidosAntesOchoMeses','PreEclampsia','UltimoRNPesoCincolb','UltimoRNPesoSietelb','DeteccionCancerCervix','FechaDeteccionCancer','ResultadoNormal','MetodoPlanificacionFamiliar','CualMetodoPlanificacionF','AsmaBronquial','HipertensionArterial','Cancer','ITS','Chagas','TomaMedicamentos','TrastornoPiscoSocial','ViolenciaGenero','Diabetes','Cardiopatia','Tuberculosis','Neuropatia','InfeccionesUrinarias','ViolenciaInrtraFamiliar','TipoSangre','Quirurgicos','Fuma','BebidasAlcoholicas','ConsumoDrogas','AntecedentesVacunas','DosisVacuna','FechaUltimaDosis','SR','OtrosAntecedentes',)
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','fcprenatalpostpartos.DatosPersonalesPacientes_id')
        ->where('CUI','LIKE','%'.$texto.'%')
        ->orwhere('Numerodireccion','LIKE','%'.$texto.'%')
        ->paginate(10);
        return view('fcprenatalpostpartos.index', compact('fcprenatalpostpartos','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * @param  int  $idDatosPersonalesPacientes
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
            'Fecha',
            'DatosPersonalesPacientes_id' => 'required|NumeroRule',
            'EstablecimientoSalud_id' => 'required|NumeroRule',
            'HemorragiaVaginal',
            'DolordeCabeza',
            'VisionBorrosa',
            'Convulsion',
            'DolorAbdominal',
            'PresionArterial',
            'Fiebre',
            'PresentacionesFetales',
            'RegistrodeReferencia' => 'required|TextoRule3',
            'MotivoConsulta',
            'HistoriaEnfermedadActual' => 'required|TextoRule3',
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
            'DeteccionCancerCervix' => 'required|TextoRule1',
            'FechaDeteccionCancer',
            'ResultadoNormal',
            'MetodoPlanificacionFamiliar',
            'CualMetodoPlanificacionF' => 'required|TextoRule1' ,
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
            'Quirurgicos' => 'required|TextoRule1',
            'Fuma',
            'BebidasAlcoholicas',
            'ConsumoDrogas',
            'AntecedentesVacunas',
            'DosisVacuna',
            'FechaUltimaDosis',
            'SR',
            'OtrosAntecedentes' => 'required|TextoRule1',
        ]);
        
        fcprenatalpostparto::create($request->all());

        return redirect()->route('fcprenatalpostpartos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fcprenatalpostparto  $fcprenatalpostparto
     * @param  int  $idFCPrenatalPostpartos
     * @return \Illuminate\Http\Response
     */
    public function show($idFCPrenatalPostpartos)
    {
        //
        $fcprenatalpostparto = fcprenatalpostparto::find($idFCPrenatalPostpartos);

        $datospacientes = datospersonalespaciente::all();
        $establecimientosaludos = establecimientosaludo::all();
        return view ('fcprenatalpostpartos.show', compact('fcprenatalpostparto'))->with('establecimientosaludos',$establecimientosaludos)->with('datospacientes',$datospacientes);
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
            'Fecha',
            'DatosPersonalesPacientes_id' => 'required | NumeroRule',
            'EstablecimientoSalud_id' => 'required|NumeroRule',
            'HemorragiaVaginal',
            'DolordeCabeza',
            'VisionBorrosa',
            'Convulsion',
            'DolorAbdominal',
            'PresionArterial',
            'Fiebre',
            'PresentacionesFetales',
            'RegistrodeReferencia' => 'required|TextoRule3',
            'MotivoConsulta',
            'HistoriaEnfermedadActual' => 'required|TextoRule3',
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
            'DeteccionCancerCervix' => 'required|TextoRule1',
            'FechaDeteccionCancer',
            'ResultadoNormal',
            'MetodoPlanificacionFamiliar',
            'CualMetodoPlanificacionF' => 'required|TextoRule1' ,
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
            'Quirurgicos' => 'required|TextoRule1',
            'Fuma',
            'BebidasAlcoholicas',
            'ConsumoDrogas',
            'AntecedentesVacunas',
            'DosisVacuna',
            'FechaUltimaDosis',
            'SR',
            'OtrosAntecedentes' => 'required|TextoRule1',
        ]);
        $input = $request->all();
        $fcprenatalpostparto = fcprenatalpostparto::find($idFCPrenatalPostpartos);
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
