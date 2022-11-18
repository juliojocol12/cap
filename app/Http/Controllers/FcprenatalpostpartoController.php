<?php

namespace App\Http\Controllers;

use App\Models\fcprenatalpostparto;
use App\Models\datospersonalespaciente;
use App\Models\establecimientosaludo;
use Illuminate\Http\Request;
use PDF;
use Carbon\Carbon;

class FcprenatalpostpartoController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-fcprenatalpostparto', ['only'=>['index']]);
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
     * Display the specified resource.
     *
     * @param  \App\Models\fcprenatalpostparto  $fcprenatalpostparto
     * @param  int  $idFCPrenatalPostpartos
     * @return \Illuminate\Http\Response
     */
    
    public function pdf()
    {
        $fcprenatalpostpartos = fcprenatalpostparto::select('idFCPrenatalPostpartos','Fecha',
        'NombresPaciente','ApellidosPaciente','CUI','Numerodireccion','idDatosPersonalesPacientes','EstablecimientoSalud_id','HemorragiaVaginal','DolordeCabeza','VisionBorrosa','Convulsion','DolorAbdominal','PresionArterial','Fiebre','PresentacionesFetales','RegistrodeReferencia','MotivoConsulta','HistoriaEnfermedadActual','FechaUltimaRegla','NoGestas','Partos','Aborto','AbortoConsecutivo','NoLIU','NacidosVivos','NacidosMuertos','HijosVivos','HijosMuertos','NoCesareas','EmbarazoMultiples','FechaUltimoParto','NacidosAntesOchoMeses','PreEclampsia','UltimoRNPesoCincolb','UltimoRNPesoSietelb','DeteccionCancerCervix','FechaDeteccionCancer','ResultadoNormal','MetodoPlanificacionFamiliar','CualMetodoPlanificacionF','AsmaBronquial','HipertensionArterial','Cancer','ITS','Chagas','TomaMedicamentos','TrastornoPiscoSocial','ViolenciaGenero','Diabetes','Cardiopatia','Tuberculosis','Neuropatia','InfeccionesUrinarias','ViolenciaInrtraFamiliar','TipoSangre','Quirurgicos','Fuma','BebidasAlcoholicas','ConsumoDrogas','AntecedentesVacunas','DosisVacuna','FechaUltimaDosis','SR','OtrosAntecedentes',)
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','fcprenatalpostpartos.DatosPersonalesPacientes_id')
        ->where(['idFCPrenatalPostpartos' => 1])
        ->paginate(10);
        //return view('fcprenatalpostpartos.pdf', compact('fcprenatalpostpartos'));

        $pdf = PDF::loadView('fcprenatalpostpartos.pdf', compact('fcprenatalpostpartos'));
        $date = Carbon::now();
        //$pdf->loadHTML('<h1>Prueba</h1>');
        return $pdf->stream('Ficha_Clinia.pdf');
        //return $pdf->download('Ficha_Clinia.pdf');

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
            'HemorragiaVaginal' => 'TextoRule4',
            'DolordeCabeza' => 'TextoRule4',
            'VisionBorrosa' => 'TextoRule4',
            'Convulsion' => 'TextoRule4',
            'DolorAbdominal' => 'TextoRule4',
            'PresionArterial' => 'TextoRule4',
            'Fiebre' => 'TextoRule4',
            'PresentacionesFetales' => 'TextoRule4',
            'RegistrodeReferencia' => 'required|TextoRule3',
            'MotivoConsulta' => 'required|TextoRule3',
            'HistoriaEnfermedadActual' => 'required|TextoRule3',
            'FechaUltimaRegla',
            'NoGestas' => 'NumeroRule2',
            'Partos' => 'NumeroRule2',
            'Aborto' => 'NumeroRule2',
            'AbortoConsecutivo' => 'TextoRule4',
            'NoLIU' => 'required|NumeroRule',
            'NacidosVivos' => 'NumeroRule2',
            'NacidosMuertos' => 'NumeroRule2',
            'HijosVivos' => 'NumeroRule2',
            'HijosMuertos' => 'NumeroRule2',
            'NoCesareas' => 'NumeroRule2',
            'EmbarazoMultiples' => 'TextoRule4',
            'FechaUltimoParto',
            'NacidosAntesOchoMeses' => 'TextoRule4',
            'PreEclampsia' => 'TextoRule4',
            'UltimoRNPesoCincolb' => 'TextoRule4',
            'UltimoRNPesoSietelb' => 'TextoRule4',
            'DeteccionCancerCervix' => 'TextoRule4',
            'FechaDeteccionCancer',
            'ResultadoNormal' => 'TextoRule4',
            'MetodoPlanificacionFamiliar' => 'TextoRule4',
            'CualMetodoPlanificacionF' => 'TextoRule4' ,
            'AsmaBronquial' => 'TextoRule4',
            'HipertensionArterial' => 'TextoRule4',
            'Cancer' => 'TextoRule4',
            'ITS' => 'TextoRule4',
            'Chagas' => 'TextoRule4',
            'TomaMedicamentos' => 'TextoRule4',
            'TrastornoPiscoSocial' => 'TextoRule4',
            'ViolenciaGenero' => 'TextoRule4',
            'Diabetes' => 'TextoRule4',
            'Cardiopatia' => 'TextoRule4',
            'Tuberculosis' => 'TextoRule4',
            'Neuropatia' => 'TextoRule4',
            'InfeccionesUrinarias' => 'TextoRule4',
            'ViolenciaInrtraFamiliar' => 'TextoRule4',
            'TipoSangre',
            'Quirurgicos' => 'required|TextoRule3',
            'Fuma' => 'TextoRule4',
            'BebidasAlcoholicas' => 'TextoRule4',
            'ConsumoDrogas' => 'TextoRule4',
            'AntecedentesVacunas' => 'TextoRule4',
            'DosisVacuna' => 'TextoRule4',
            'FechaUltimaDosis',
            'SR' => 'TextoRule4',
            'OtrosAntecedentes' => 'required|TextoRule3',
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
            'DatosPersonalesPacientes_id' => 'required|NumeroRule',
            'EstablecimientoSalud_id' => 'required|NumeroRule',
            'HemorragiaVaginal' => 'TextoRule4',
            'DolordeCabeza' => 'TextoRule4',
            'VisionBorrosa' => 'TextoRule4',
            'Convulsion' => 'TextoRule4',
            'DolorAbdominal' => 'TextoRule4',
            'PresionArterial' => 'TextoRule4',
            'Fiebre' => 'TextoRule4',
            'PresentacionesFetales' => 'TextoRule4',
            'RegistrodeReferencia' => 'required|TextoRule3',
            'MotivoConsulta' => 'required|TextoRule3',
            'HistoriaEnfermedadActual' => 'required|TextoRule3',
            'FechaUltimaRegla',
            'NoGestas' => 'NumeroRule2',
            'Partos' => 'NumeroRule2',
            'Aborto' => 'NumeroRule2',
            'AbortoConsecutivo' => 'TextoRule4',
            'NoLIU' => 'required|NumeroRule',
            'NacidosVivos' => 'NumeroRule2',
            'NacidosMuertos' => 'NumeroRule2',
            'HijosVivos' => 'NumeroRule2',
            'HijosMuertos' => 'NumeroRule2',
            'NoCesareas' => 'NumeroRule2',
            'EmbarazoMultiples' => 'TextoRule4',
            'FechaUltimoParto',
            'NacidosAntesOchoMeses' => 'TextoRule4',
            'PreEclampsia' => 'TextoRule4',
            'UltimoRNPesoCincolb' => 'TextoRule4',
            'UltimoRNPesoSietelb' => 'TextoRule4',
            'DeteccionCancerCervix' => 'TextoRule4',
            'FechaDeteccionCancer',
            'ResultadoNormal' => 'TextoRule4',
            'MetodoPlanificacionFamiliar' => 'TextoRule4',
            'CualMetodoPlanificacionF' => 'TextoRule4' ,
            'AsmaBronquial' => 'TextoRule4',
            'HipertensionArterial' => 'TextoRule4',
            'Cancer' => 'TextoRule4',
            'ITS' => 'TextoRule4',
            'Chagas' => 'TextoRule4',
            'TomaMedicamentos' => 'TextoRule4',
            'TrastornoPiscoSocial' => 'TextoRule4',
            'ViolenciaGenero' => 'TextoRule4',
            'Diabetes' => 'TextoRule4',
            'Cardiopatia' => 'TextoRule4',
            'Tuberculosis' => 'TextoRule4',
            'Neuropatia' => 'TextoRule4',
            'InfeccionesUrinarias' => 'TextoRule4',
            'ViolenciaInrtraFamiliar' => 'TextoRule4',
            'TipoSangre',
            'Quirurgicos' => 'required|TextoRule3',
            'Fuma' => 'TextoRule4',
            'BebidasAlcoholicas' => 'TextoRule4',
            'ConsumoDrogas' => 'TextoRule4',
            'AntecedentesVacunas' => 'TextoRule4',
            'DosisVacuna' => 'TextoRule4',
            'FechaUltimaDosis',
            'SR' => 'TextoRule4',
            'OtrosAntecedentes' => 'required|TextoRule3',
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
