<?php

namespace App\Http\Controllers;

use App\Models\controle;
use App\Models\datospersonalespaciente;
use App\Models\fcprenatalpostparto;
use Illuminate\Http\Request;

class ControleController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-controle', ['only'=>['index']]);
        $this->middleware('permission:crear-controle', ['only'=>['create','store']]);
        $this->middleware('permission:editar-controle', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-controle', ['only'=>['destroy']]);
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) 
    {
        $cant_controlprenatal = controle::count();
        if($cant_controlprenatal === 0)
        {
            $texto = trim($request->get('texto'));
            $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
            ->where('CUI','LIKE','%'.$texto.'%')
            ->paginate(10);
            return view('controles.index', compact('controles','texto'));
        }
        else{
            $texto = trim($request->get('texto'));
            $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
            ->where('CUI','LIKE','%'.$texto.'%')
            ->where('Estado','Si')
            ->paginate(10);
            return view('controles.index', compact('controles','texto'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datospacientes = datospersonalespaciente::all()->where('Stado','Si');
        $fcprenatalpostparto = fcprenatalpostparto::all()->where('Estado','Si');
        //$fcprenatalpostparto = fcprenatalpostparto::select('idFCPrenatalPostpartos','Fecha','NombresPaciente','ApellidosPaciente','CUI','EstablecimientoSalud_id','HemorragiaVaginal','DolordeCabeza','VisionBorrosa',)->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','fcprenatalpostpartos.DatosPersonalesPacientes_id');
        return view ('controles.crear')->with('fcprenatalpostparto',$fcprenatalpostparto)->with('datospacientes',$datospacientes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //required
        $this->validate($request,[
            'NoControl' => 'required|NumeroRule',
            'SemanasEmbarazo' =>'required|NumeroRule',
            'FechaVisita' =>'required',
            'DatosPersonalesPacientes_id' =>'required',
            'FCPrenatalPostparto_id' =>'required',
            'FechaPosibleParto' =>'required',
            'CircuferenciaBrazo' =>'NumeroRule2',
            'EvaluacionInicialRapida'=>'required',
            'DescripcionEvaluacion' => 'TextoRule4',
            'PresionArterial' => 'required|NumeroRule',
            'Temperatura' => 'required|NumeroRule',
            'RespiracionPorMinuto' => 'required|NumeroRule',
            'FrecuenciaCardiacaMaternal' => 'required|NumeroRule',
            'Pesolb' => 'required|DecimalRule',
            'Talla' => 'TextoRule4',
            'CMB' => 'TextoRule4',
            'Diagnostico' => 'TextoRule4',
            'IMC_Diagnostico' => 'TextoRule4',
            'Accionesicm' => 'TextoRule4',
            'GananciaPeso',
            'Accionesganancia' => 'TextoRule4',
            'Anemia' => 'required',
            'DescripcionAnemia' => 'TextoRule4',
            'ExamenCardioPulmonar' => 'TextoRule4',
            'ExamenMamas' => 'TextoRule4',
            'ObservacionAbdominal' => 'required|TextoRule4',
            'AlturaUterina' => 'TextoRule4',
            'PresenciaMovimientoFetales' => 'TextoRule4',
            'FrecuenciaCardiacaFetal' => 'TextoRule4',
            'ManiobrasLeopold' => 'TextoRule4',
            'TrazasSangreManchado' => 'required',
            'DescripcionTrazasSangreManchado' => 'TextoRule4',
            'EnfermedadesGinecologicos' => 'required',
            'DescripcionEnfermedadesGinecologicos'=> 'TextoRule4',
            'FlujoVaginal' => 'required',
            'PruebasEmbarazo',
            'DecripcionPruebasEmbarazo',
            'Hematologia',
            'DescripcionHematologia',
            'GrupoRH',
            'DescripcionGrupoRH',
            'Orina' => 'required',
            'DescripcionOrina',
            'Heces',
            'DescirpcionHeces',
            'GlicemiaAyunas' => 'required',
            'DescripcionGlicemiaAyunas',
            'VDLR',
            'DescripcionVDLR',
            'VIH',
            'DescipcionVIH' => 'TextoRule4',
            'TORCH',
            'DescripcionTORCH' => 'TextoRule4',
            'PapanicolaouIVAA',
            'DescripcionPapanicolaouIVAA' => 'TextoRule4',
            'HepatitisB',
            'DescripcionHepatitisB',
            'OtrosEstudios' => 'required|TextoRule3',
            'SemanasEmbarazoFURAU' => 'required|TextoRule3',
            'ProblemasDetectados' => 'required|TextoRule3',
            'SulfatoFerroso' => 'required|TextoRule3',
            'AcidoFolico' => 'required|TextoRule3',
            'VacunacionTdTdap' => 'required|TextoRule3',
            'VacunacionInfluenza' => 'required|TextoRule3',
            'OtrosTratamientos' => 'required|TextoRule3',
            'Referencia' => 'required|TextoRule3',
            'AlimentacionEmbarazo' => 'required|TextoRule3',
            'DescripcionAlimentacionEmbarazo' => 'TextoRule4',
            'CuidadosPersonales' => 'required|TextoRule3',
            'DescripcionCuidadosPersonales' => 'TextoRule4',
            'SintomasComunes' => 'required|TextoRule3',
            'DescipcionSintomasComunes' => 'TextoRule4',
            'SenalesPeligro' => 'required|TextoRule3',
            'DescripcionSenalesPeligro' => 'TextoRule4',
            'ConsejeriaPrePostVIH' => 'required|TextoRule3',
            'DescripcionConsejeriaPrePostVIH' => 'TextoRule4',
            'PlanParto' => 'required|TextoRule3',
            'DescrpcionPlanParto' => 'TextoRule4',
            'PlanEmergencia' => 'required|TextoRule3',
            'DescpcionPlanEmergencia' => 'TextoRule4',
            'LactanciaMaterna' => 'required|TextoRule3',
            'DescripcionLactanciaMaterna' => 'TextoRule4',
            'ViolenciaSexual'=> 'required|TextoRule3',
            'DescipcionViolenciaSexual' => 'TextoRule4',
            'MetodosPlanificcion'=> 'required|TextoRule3',
            'ImportanciaControlPos' => 'required|TextoRule3',
            'VacunacionRecienNacido' => 'required|TextoRule3',
            'Usuario_id',
			'Estado',
            
        ]);
        
        controle::create($request->all());

        return redirect()->route('controles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\controle  $controle
     * @param  int  $idControles
     * @return \Illuminate\Http\Response
     */
    public function show($idControles)
    { 
        //
        $controle = controle::find($idControles);

        $datospacientes = datospersonalespaciente::all()->where('Stado','Si');
        $fcprenatalpostparto = fcprenatalpostparto::all()->where('Estado','Si');
        return view ('controles.show', compact('controle'))->with('fcprenatalpostparto',$fcprenatalpostparto)->with('datospacientes',$datospacientes);
   
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\controle  $controle
     * @param  int  $idControles
     * @return \Illuminate\Http\Response
     */
    public function edit($idControles)
    {
        //
        $controle = controle::find($idControles);

        $datospacientes = datospersonalespaciente::all()->where('Stado','Si');
        $fcprenatalpostparto = fcprenatalpostparto::all()->where('Estado','Si');
        return view ('controles.editar', compact('controle'))->with('fcprenatalpostparto',$fcprenatalpostparto)->with('datospacientes',$datospacientes);
   
         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\controle  $controle
     * @param  int  $idControles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idControles)
    {
        //
        request()->validate([
            'NoControl' => 'required|NumeroRule',
            'SemanasEmbarazo' =>'required|NumeroRule',
            'FechaVisita' =>'required',
            'DatosPersonalesPacientes_id' =>'required',
            'FCPrenatalPostparto_id' =>'required',
            'FechaPosibleParto' =>'required',
            'CircuferenciaBrazo' =>'NumeroRule2',
            'EvaluacionInicialRapida'=>'required',
            'DescripcionEvaluacion' => 'TextoRule4',
            'PresionArterial' => 'required|NumeroRule',
            'Temperatura' => 'required|NumeroRule',
            'RespiracionPorMinuto' => 'required|NumeroRule',
            'FrecuenciaCardiacaMaternal' => 'required|NumeroRule',
            'Pesolb' => 'required|DecimalRule',
            'Talla' => 'TextoRule4',
            'CMB' => 'TextoRule4',
            'Diagnostico' => 'TextoRule4',
            'IMC_Diagnostico' => 'TextoRule4',
            'Accionesicm' => 'TextoRule4',
            'GananciaPeso',
            'Accionesganancia' => 'TextoRule4',
            'Anemia' => 'required',
            'DescripcionAnemia' => 'TextoRule4',
            'ExamenCardioPulmonar' => 'TextoRule4',
            'ExamenMamas' => 'TextoRule4',
            'ObservacionAbdominal' => 'required|TextoRule4',
            'AlturaUterina' => 'TextoRule4',
            'PresenciaMovimientoFetales' => 'TextoRule4',
            'FrecuenciaCardiacaFetal' => 'TextoRule4',
            'ManiobrasLeopold' => 'TextoRule4',
            'TrazasSangreManchado' => 'required',
            'DescripcionTrazasSangreManchado' => 'TextoRule4',
            'EnfermedadesGinecologicos' => 'required',
            'DescripcionEnfermedadesGinecologicos'=> 'TextoRule4',
            'FlujoVaginal' => 'required',
            'PruebasEmbarazo',
            'DecripcionPruebasEmbarazo',
            'Hematologia',
            'DescripcionHematologia',
            'GrupoRH',
            'DescripcionGrupoRH',
            'Orina' => 'required',
            'DescripcionOrina',
            'Heces',
            'DescirpcionHeces',
            'GlicemiaAyunas' => 'required',
            'DescripcionGlicemiaAyunas',
            'VDLR',
            'DescripcionVDLR',
            'VIH',
            'DescipcionVIH' => 'TextoRule4',
            'TORCH',
            'DescripcionTORCH' => 'TextoRule4',
            'PapanicolaouIVAA',
            'DescripcionPapanicolaouIVAA' => 'TextoRule4',
            'HepatitisB',
            'DescripcionHepatitisB',
            'OtrosEstudios' => 'required|TextoRule3',
            'SemanasEmbarazoFURAU' => 'required|TextoRule3',
            'ProblemasDetectados' => 'required|TextoRule3',
            'SulfatoFerroso' => 'required|TextoRule3',
            'AcidoFolico' => 'required|TextoRule3',
            'VacunacionTdTdap' => 'required|TextoRule3',
            'VacunacionInfluenza' => 'required|TextoRule3',
            'OtrosTratamientos' => 'required|TextoRule3',
            'Referencia' => 'required|TextoRule3',
            'AlimentacionEmbarazo' => 'required|TextoRule3',
            'DescripcionAlimentacionEmbarazo' => 'TextoRule4',
            'CuidadosPersonales' => 'required|TextoRule3',
            'DescripcionCuidadosPersonales' => 'TextoRule4',
            'SintomasComunes' => 'required|TextoRule3',
            'DescipcionSintomasComunes' => 'TextoRule4',
            'SenalesPeligro' => 'required|TextoRule3',
            'DescripcionSenalesPeligro' => 'TextoRule4',
            'ConsejeriaPrePostVIH' => 'required|TextoRule3',
            'DescripcionConsejeriaPrePostVIH' => 'TextoRule4',
            'PlanParto' => 'required|TextoRule3',
            'DescrpcionPlanParto' => 'TextoRule4',
            'PlanEmergencia' => 'required|TextoRule3',
            'DescpcionPlanEmergencia' => 'TextoRule4',
            'LactanciaMaterna' => 'required|TextoRule3',
            'DescripcionLactanciaMaterna' => 'TextoRule4',
            'ViolenciaSexual'=> 'required|TextoRule3',
            'DescipcionViolenciaSexual' => 'TextoRule4',
            'MetodosPlanificcion'=> 'required|TextoRule3',
            'ImportanciaControlPos' => 'required|TextoRule3',
            'VacunacionRecienNacido' => 'required|TextoRule3',
            'Usuario_id',
			'Estado',
                ]);
            $input = $request->all();
            $controle = controle::find($idControles);
            $controle->update($input);
            return redirect()->route('controles.index');
                
            }           
 
 

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\controle  $controle
     * @param  int  $idControles
     * @return \Illuminate\Http\Response
     */
    public function destroy($idControles)
    {
        $controles = controle::findOrFail($idControles);
        $controles->Estado='No';
        $controles->update();
        return redirect()->route('controles.index')->with('status');
    }
}
