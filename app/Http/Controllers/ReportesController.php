<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pueblo;
use App\Models\DatosFamiliare;
use App\Models\DatosPersonalesPaciente;
use PDF;
use App\Models\vacuna;
use App\Models\User;
use App\Models\vacunainfante;
use App\Models\controle;
use App\Models\fcprenatalpostparto;
use App\Models\controlposparto;
use App\Models\fcevaluacionposparto; 
use App\Models\establecimientosaludo;
use App\Models\personale;
use App\Models\Infante;

use Carbon\Carbon;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reportes.index');
    }

    //Mujeres embarazadas por rango edad
    public function r1()
    {
        return view('reportes.r1');
    }

    //Mujeres embarazadas por trimestre (primero, segundo o tercero)
    public function r2(Request $request)
    {
        /*
        $cant_controlprenatal = controle::count();
        if($cant_controlprenatal === 0)
        {
            $busquedaNombre = trim($request->get('filtroNombre'));
            $busquedaApellido = trim($request->get('filtroApellido'));
            $busquedaDPI = trim($request->get('filtroDPI'));
            $busquedaNoControl = trim($request->get('filtroNoControl'));
            $busquedaPagina = trim($request->get('filtroPagina'));
            
            $busquedaSemana = trim($request->get('filtroSemana'));
            if($busquedaSemana === '1')
            {
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereBetween('SemanasEmbarazo',['1','17'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                return view('reportes.r2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina'));            
            } elseif ($busquedaSemana === '2')
            {
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')

                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereBetween('SemanasEmbarazo',['18','35'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                return view('reportes.r2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina'));    

            }
            elseif ($busquedaSemana === '3')
            {
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
                
                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereBetween('SemanasEmbarazo',['36','52'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                return view('reportes.r2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina'));    
                
            }
            else{
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')

                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                return view('reportes.r2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina'));  
            }
        }
        else{*/

            $busquedaNombre = trim($request->get('filtroNombre'));
            $busquedaApellido = trim($request->get('filtroApellido'));
            $busquedaDPI = trim($request->get('filtroDPI'));
            $busquedaNoControl = trim($request->get('filtroNoControl'));
            $busquedaPagina = trim($request->get('filtroPagina'));
            
            $busquedaSemana = trim($request->get('filtroSemana'));
            if($busquedaSemana === '1')
            {
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereIn('SemanasEmbarazo',['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'])
                //->where('SemanasEmbarazo','5')
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                return view('reportes.r2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina'));            
            } 
            elseif ($busquedaSemana === '2')
            {
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')

                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereIn('SemanasEmbarazo',['18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                return view('reportes.r2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina'));    

            }
            elseif ($busquedaSemana === '3')
            {
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
                
                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->where('SemanasEmbarazo','>','35')
                ->whereIn('SemanasEmbarazo',['36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                return view('reportes.r2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina'));    
                
            }
            else{
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')

                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->where('Estado','Si')
                
                ->paginate($busquedaPagina);
                return view('reportes.r2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina'));  
            }
        //}
    }

    public function pdf2(Request $request){
        /*
        $cant_controlprenatal = controle::count();
        if($cant_controlprenatal === 0)
        {
            $busquedaNombre = trim($request->get('filtroNombre'));
            $busquedaApellido = trim($request->get('filtroApellido'));
            $busquedaDPI = trim($request->get('filtroDPI'));
            $busquedaNoControl = trim($request->get('filtroNoControl'));
            $busquedaPagina = trim($request->get('filtroPagina'));
            
            $busquedaSemana = trim($request->get('filtroSemana'));
            if($busquedaSemana === '1')
            {
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereIn('SemanasEmbarazo',['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'])
                //->where('SemanasEmbarazo','5')
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                return view('reportes.r2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina'));            
            } 
            elseif ($busquedaSemana === '2')
            {
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')

                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereIn('SemanasEmbarazo',['18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                return view('reportes.r2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina'));    

            }
            elseif ($busquedaSemana === '3')
            {
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
                
                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->where('SemanasEmbarazo','>','35')
                ->whereIn('SemanasEmbarazo',['36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                return view('reportes.r2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina'));    
                
            }
            else{
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')

                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                return view('reportes.r2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina'));  
            }
        }
        else{*/

            $busquedaNombre = trim($request->get('filtroNombre'));
            $busquedaApellido = trim($request->get('filtroApellido'));
            $busquedaDPI = trim($request->get('filtroDPI'));
            $busquedaNoControl = trim($request->get('filtroNoControl'));
            $busquedaPagina = trim($request->get('filtroPagina'));
            
            $busquedaSemana = trim($request->get('filtroSemana'));
            if($busquedaSemana === '1')
            {
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereIn('SemanasEmbarazo',['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                
                $totalpacientes = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereIn('SemanasEmbarazo',['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina)
                ->count('idControles');
                $pdf = PDF::loadView('reportes/pdf/pdf2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina','totalpacientes'));
                $pdf->setPaper('A4', 'landscape');
                return $pdf->stream('Reporte de pacientes.pdf');            
            } elseif ($busquedaSemana === '2')
            {
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')

                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereIn('SemanasEmbarazo',['18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                
                $totalpacientes = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereIn('SemanasEmbarazo',['18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina)
                ->count('idControles');
                $pdf = PDF::loadView('reportes/pdf/pdf2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina','totalpacientes'));
                $pdf->setPaper('A4', 'landscape');
                return $pdf->stream('Reporte de pacientes.pdf');    

            }
            elseif ($busquedaSemana === '3')
            {
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
                
                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereIn('SemanasEmbarazo',['36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina);
                
                $totalpacientes = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->whereIn('SemanasEmbarazo',['36','37','38','39','40','41','42','43','44','45','46','47','48','49','50','51','52'])
                ->where('Estado','Si')
                ->paginate($busquedaPagina)
                ->count('idControles');
                $pdf = PDF::loadView('reportes/pdf/pdf2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina','totalpacientes'));
                $pdf->setPaper('A4', 'landscape');
                return $pdf->stream('Reporte de pacientes.pdf');  
                
            }
            else{
                $controles = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')

                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->where('Estado','Si')

                ->paginate($busquedaPagina);

                $totalpacientes = controle::select('idControles','NoControl','SemanasEmbarazo','FechaVisita','NombresPaciente','ApellidosPaciente','CUI' ,'Numerodireccion','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal','PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido', 'Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','controles.DatosPersonalesPacientes_id')
                ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
                ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
                ->where('CUI','LIKE','%'.$busquedaDPI.'%')
                ->where('NoControl','LIKE','%'.$busquedaNoControl.'%')
                ->where('Estado','Si')     
                ->paginate($busquedaPagina)           
                ->count('idControles');
                $pdf = PDF::loadView('reportes/pdf/pdf2', compact('controles','busquedaNombre','busquedaSemana','busquedaApellido','busquedaDPI','busquedaNoControl','busquedaPagina','totalpacientes'));
                $pdf->setPaper('A4', 'landscape');
                return $pdf->stream('Reporte de pacientes.pdf');
            }
            
        //}
    }

    //Mujeres embarazadas en alto riego
    public function r3()
    {
        
        return view('reportes.r3');

        
    }

    //Reporte general de mujeres embarazadas
    public function r4(Request $request)
    {
        $busqueda = trim($request->get('filtro'));
        $busquedaDPI = trim($request->get('filtroDPI'));
        $busquedaProfesion = trim($request->get('filtroProfesion'));
        $busquedaPueblo = trim($request->get('filtroPueblo'));
        $busquedaEstadoCivil = trim($request->get('filtroEstadoCivil'));
        $busquedaSangre = trim($request->get('filtroSangre'));
        $busquedaNombre = trim($request->get('filtroNombre'));
        $busquedaApellido = trim($request->get('filtroApellido'));

        $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
        'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
        'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente',
        'Migrante','Nombre')
        ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
        ->where('FechaNaciemientoPaciente','LIKE','%'.$busqueda.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('ProfesionOficio','LIKE','%'.$busquedaProfesion.'%')
        ->where('Nombre','LIKE','%'.$busquedaPueblo.'%')
        ->where('EstadoCivil','LIKE','%'.$busquedaEstadoCivil.'%')
        ->where('TipoSanguineo','LIKE','%'.$busquedaSangre.'%')
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->paginate(10);

        $totalpacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
        'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
        'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente',
        'Migrante','Nombre')
        ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
        ->where('FechaNaciemientoPaciente','LIKE','%'.$busqueda.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('ProfesionOficio','LIKE','%'.$busquedaProfesion.'%')
        ->where('Nombre','LIKE','%'.$busquedaPueblo.'%')
        ->where('EstadoCivil','LIKE','%'.$busquedaEstadoCivil.'%')
        ->where('TipoSanguineo','LIKE','%'.$busquedaSangre.'%')
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->count('idDatosPersonalesPacientes');

        $union = compact('datospersonalespacientes','busqueda','busquedaDPI','busquedaProfesion','busquedaPueblo','busquedaEstadoCivil','busquedaSangre','totalpacientes','busquedaNombre','busquedaApellido');
        return view('reportes.r4', $union );
    }

    public function pdf4(Request $request){
        $busqueda = trim($request->get('filtro'));
        $busquedaDPI = trim($request->get('filtroDPI'));
        $busquedaProfesion = trim($request->get('filtroProfesion'));        
        $busquedaPueblo = trim($request->get('filtroPueblo'));
        $busquedaEstadoCivil = trim($request->get('filtroEstadoCivil'));
        $busquedaSangre = trim($request->get('filtroSangre'));
        $busquedaNombre = trim($request->get('filtroNombre'));
        $busquedaApellido = trim($request->get('filtroApellido'));

        $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
        'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
        'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente',
        'Migrante','Nombre')
        ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
        ->where('FechaNaciemientoPaciente','LIKE','%'.$busqueda.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('ProfesionOficio','LIKE','%'.$busquedaProfesion.'%')
        ->where('Nombre','LIKE','%'.$busquedaPueblo.'%')
        ->where('EstadoCivil','LIKE','%'.$busquedaEstadoCivil.'%')
        ->where('TipoSanguineo','LIKE','%'.$busquedaSangre.'%')
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->paginate(10);

        $totalpacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
        'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
        'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente',
        'Migrante','Nombre')
        ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
        ->where('FechaNaciemientoPaciente','LIKE','%'.$busqueda.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('ProfesionOficio','LIKE','%'.$busquedaProfesion.'%')
        ->where('Nombre','LIKE','%'.$busquedaPueblo.'%')
        ->where('EstadoCivil','LIKE','%'.$busquedaEstadoCivil.'%')
        ->where('TipoSanguineo','LIKE','%'.$busquedaSangre.'%')
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->count('idDatosPersonalesPacientes');

        $union = compact('datospersonalespacientes','busqueda','busquedaDPI','busquedaProfesion','busquedaPueblo','busquedaEstadoCivil','busquedaSangre','totalpacientes','busquedaNombre','busquedaApellido');


        $pdf = PDF::loadView('reportes/pdf/pdf4', $union);
        return $pdf->stream('Reporte de pacientes.pdf');
        //return $pdf->download('Ficha_Clinia.pdf');
    }

    //Cantidad de mujeres en el periodo puerperio
    public function r5(Request $request)
    {
        $busquedar5Pag = trim($request->get('filtror5Pag'));

        $controlpospartos = controlposparto::select('controlpospartos.idControlPosparto','controlpospartos.NoControl','controlpospartos.FCEvaluacionPosparto_id','controlpospartos.SemanasDespuesParto','controlpospartos.FechaVisita','controlpospartos.InvolucionUterina','controlpospartos.ExamenMamas','controlpospartos.HeridaOperatiria','controlpospartos.ExamenGInecológico','controlpospartos.PresionArterial','controlpospartos.MMHG','controlpospartos.FrecuenciaCardiaca','controlpospartos.Temperatura','controlpospartos.LactanciaMaterna','controlpospartos.ProblemasDetectados','controlpospartos.SulfatoFerroso','controlpospartos.AcidoFolico','controlpospartos.VacuncacionTdapMadre','controlpospartos.Medicamento','controlpospartos.LactanciaMaternaExclusiva','controlpospartos.PlanificacionFamiliarPosparto','controlpospartos.AlimentacionMadreLactante','controlpospartos.LactanciaMaternaVIH','controlpospartos.MujerVIH','controlpospartos.Usuario_id','controlpospartos.Estado','FechaEvaluacionPosparto','NombresPaciente','ApellidosPaciente','Numerodireccion')
        ->join('fcevaluacionpospartos', 'fcevaluacionpospartos.idFCEvaluacionPosparto', '=','controlpospartos.FCEvaluacionPosparto_id')
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','fcevaluacionpospartos.idFCEvaluacionPosparto')
        ->where('controlpospartos.Estado','Si')
        ->paginate($busquedar5Pag);
        return view('reportes.r5', compact('controlpospartos','busquedar5Pag'));
    }
    public function pdf5(Request $request){
        $busquedar5Pag = trim($request->get('filtror5Pag'));

        $controlpospartos = controlposparto::select('controlpospartos.idControlPosparto','controlpospartos.NoControl','controlpospartos.FCEvaluacionPosparto_id','controlpospartos.SemanasDespuesParto','controlpospartos.FechaVisita','controlpospartos.InvolucionUterina','controlpospartos.ExamenMamas','controlpospartos.HeridaOperatiria','controlpospartos.ExamenGInecológico','controlpospartos.PresionArterial','controlpospartos.MMHG','controlpospartos.FrecuenciaCardiaca','controlpospartos.Temperatura','controlpospartos.LactanciaMaterna','controlpospartos.ProblemasDetectados','controlpospartos.SulfatoFerroso','controlpospartos.AcidoFolico','controlpospartos.VacuncacionTdapMadre','controlpospartos.Medicamento','controlpospartos.LactanciaMaternaExclusiva','controlpospartos.PlanificacionFamiliarPosparto','controlpospartos.AlimentacionMadreLactante','controlpospartos.LactanciaMaternaVIH','controlpospartos.MujerVIH','controlpospartos.Usuario_id','controlpospartos.Estado','FechaEvaluacionPosparto','NombresPaciente','ApellidosPaciente','Numerodireccion')
        ->join('fcevaluacionpospartos', 'fcevaluacionpospartos.idFCEvaluacionPosparto', '=','controlpospartos.FCEvaluacionPosparto_id')
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','fcevaluacionpospartos.idFCEvaluacionPosparto')
        ->where('controlpospartos.Estado','Si')
        ->paginate($busquedar5Pag);

        $totalpacientes = controlposparto::select('controlpospartos.idControlPosparto','controlpospartos.NoControl','controlpospartos.FCEvaluacionPosparto_id','controlpospartos.SemanasDespuesParto','controlpospartos.FechaVisita','controlpospartos.InvolucionUterina','controlpospartos.ExamenMamas','controlpospartos.HeridaOperatiria','controlpospartos.ExamenGInecológico','controlpospartos.PresionArterial','controlpospartos.MMHG','controlpospartos.FrecuenciaCardiaca','controlpospartos.Temperatura','controlpospartos.LactanciaMaterna','controlpospartos.ProblemasDetectados','controlpospartos.SulfatoFerroso','controlpospartos.AcidoFolico','controlpospartos.VacuncacionTdapMadre','controlpospartos.Medicamento','controlpospartos.LactanciaMaternaExclusiva','controlpospartos.PlanificacionFamiliarPosparto','controlpospartos.AlimentacionMadreLactante','controlpospartos.LactanciaMaternaVIH','controlpospartos.MujerVIH','controlpospartos.Usuario_id','controlpospartos.Estado','FechaEvaluacionPosparto','NombresPaciente','ApellidosPaciente','Numerodireccion')
        ->join('fcevaluacionpospartos', 'fcevaluacionpospartos.idFCEvaluacionPosparto', '=','controlpospartos.FCEvaluacionPosparto_id')
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','fcevaluacionpospartos.idFCEvaluacionPosparto')
        ->where('controlpospartos.Estado','Si')
        ->count('controlpospartos.idControlPosparto');

        $pdf = PDF::loadView('reportes/pdf/pdf5', compact('controlpospartos','busquedar5Pag'));
        //pagina lado horizontal
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream('Reporte de pacientes.pdf');
    }

    //Cantidad de nacimientos por fechas
    public function r6()
    {
        return view('reportes.r6');
    }

    //Infantes atendidos menores a cinco años
    public function r7()
    {
        return view('reportes.r7');
    }

    //Infantes que concluyen con la etapa de vacunación
    public function r8()
    {
        return view('reportes.r8');
    }

    //Índice de muertes maternas
    public function r9()
    {
        return view('reportes.r9');
    }

    //Índice de abortos
    public function r10()
    {
        return view('reportes.r10');
    }

    //Alertas de ausencia de pacientes a citas 
    public function r11()
    {
        return view('reportes.r11');
    }

    //Alerta de insumos que se estén agotando y que se prontos a la fecha de caducidad.
    public function r12()
    {
        return view('reportes.r12');
    }

    //Inventario de insumos médicos
    public function r13(Request $request)
    {
        $texto = trim($request->get('texto'));
        $vacunas = vacuna::where('NombreVacuna','LIKE','%'.$texto.'%')->where('Estado','Si')->paginate(10);

        $restacovid = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','Covid')->where('Tado','Si')->count('vacunainfantes.Vacunas_id');
        $sumacovid = vacuna::where('NombreVacuna', 'Covid')->where('Estado','Si')->sum('Cantidad');
        $vacunascovid = $sumacovid - $restacovid;

        $restatd = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','Td')->where('Tado','Si')->count('vacunainfantes.Vacunas_id');        
        $sumatd = vacuna::where('NombreVacuna', 'Td')->where('Estado','Si')->sum('Cantidad');
        $vacunastd = $sumatd - $restatd;

        $restainfluenza = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','Influenza')->where('Tado','Si')->count('vacunainfantes.Vacunas_id');
        $sumainfluenza = vacuna::where('NombreVacuna', 'Influenza')->where('Estado','Si')->sum('Cantidad');
        $vacunainfluenza = $sumainfluenza - $restainfluenza;

        $restatdap = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','TdAp')->where('Tado','Si')->count('vacunainfantes.Vacunas_id');
        $sumatdap = vacuna::where('NombreVacuna', 'TdAp')->where('Estado','Si')->sum('Cantidad');
        $vacunastdap =  $sumatdap - $restatdap;
        
        $unionvacuna = compact('vacunas','texto','vacunastd','vacunascovid','vacunainfluenza','vacunastdap');

        return view('reportes.r13', $unionvacuna);
    }

    public function pdf13(Request $request){
        $texto = trim($request->get('texto'));
        $vacunas = vacuna::where('NombreVacuna','LIKE','%'.$texto.'%')->where('Estado','Si')->paginate(10);

        $restacovid = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','Covid')->where('Tado','Si')->count('vacunainfantes.Vacunas_id');
        $sumacovid = vacuna::where('NombreVacuna', 'Covid')->where('Estado','Si')->sum('Cantidad');
        $vacunascovid = $sumacovid - $restacovid;

        $restatd = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','Td')->where('Tado','Si')->count('vacunainfantes.Vacunas_id');        
        $sumatd = vacuna::where('NombreVacuna', 'Td')->where('Estado','Si')->sum('Cantidad');
        $vacunastd = $sumatd - $restatd;

        $restainfluenza = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','Influenza')->where('Tado','Si')->count('vacunainfantes.Vacunas_id');
        $sumainfluenza = vacuna::where('NombreVacuna', 'Influenza')->where('Estado','Si')->sum('Cantidad');
        $vacunainfluenza = $sumainfluenza - $restainfluenza;

        $restatdap = vacunainfante::join('vacunas','vacunas.idVacunas','=','vacunainfantes.Vacunas_id')->where('vacunas.NombreVacuna','TdAp')->where('Tado','Si')->count('vacunainfantes.Vacunas_id');
        $sumatdap = vacuna::where('NombreVacuna', 'TdAp')->where('Estado','Si')->sum('Cantidad');
        $vacunastdap =  $sumatdap - $restatdap;
        
        $unionvacuna = compact('vacunas','texto','vacunastd','vacunascovid','vacunainfluenza','vacunastdap');

        $pdf = PDF::loadView('reportes/pdf/pdf13', $unionvacuna);
        return $pdf->stream('Reporte de pacientes.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
