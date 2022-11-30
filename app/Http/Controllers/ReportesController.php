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
use App\Models\Aborto;


use Luecano\NumeroALetras\NumeroALetras;
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
    public function r1(Request $request)
    {
        $busquedaInicio = trim($request->get('filtroInicio'));
        $busquedaFinal = trim($request->get('filtroFinal'));
        
        if($busquedaInicio==='' && $busquedaFinal==='')
        {
            $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
            'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
            'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente','Edad',
            'Migrante','Nombre')
            ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
            ->where('Stado','Si')
            ->paginate(10);
            return view('reportes.r1', compact('datospersonalespacientes','busquedaInicio','busquedaFinal'));
        }
        elseif($busquedaInicio===$busquedaInicio && $busquedaFinal==='')
        {
            $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
            'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
            'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente','Edad',
            'Migrante','Nombre')
            ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
            ->where('Edad','>=',$busquedaInicio)
            ->where('Stado','Si')
            ->paginate(10);
            return view('reportes.r1', compact('datospersonalespacientes','busquedaInicio','busquedaFinal'));
        }
        elseif($busquedaInicio==='' && $busquedaFinal===$busquedaFinal)
        {
            $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
            'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
            'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente','Edad',
            'Migrante','Nombre')
            ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
            ->where('Edad','<=',$busquedaFinal)
            ->where('Stado','Si')
            ->paginate(10);
            return view('reportes.r1', compact('datospersonalespacientes','busquedaInicio','busquedaFinal'));
        }
        elseif($busquedaInicio===$busquedaInicio && $busquedaFinal===$busquedaFinal)
        {
            $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
            'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
            'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente','Edad',
            'Migrante','Nombre')
            ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
            ->where('Edad','>=',$busquedaInicio)
            ->where('Edad','<=',$busquedaFinal)
            ->where('Stado','Si')
            ->paginate(10);
            return view('reportes.r1', compact('datospersonalespacientes','busquedaInicio','busquedaFinal'));
        }
        
        
    }
     public function pdf1(Request $request)
     {
        $busquedaInicio = trim($request->get('filtroInicio'));
        $busquedaFinal = trim($request->get('filtroFinal'));
        
        if($busquedaInicio==='' && $busquedaFinal==='')
        {
            $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
            'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
            'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente','Edad',
            'Migrante','Nombre')
            ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
            ->where('Stado','Si')
            ->paginate(10);
            $pdf = PDF::loadView('reportes/pdf/pdf1', compact('datospersonalespacientes','busquedaInicio','busquedaFinal'));
            $pdf->setPaper('A4', 'landscape');
            return $pdf->stream('Reporte_edad.pdf');
        }
        elseif($busquedaInicio===$busquedaInicio && $busquedaFinal==='')
        {
            $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
            'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
            'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente','Edad',
            'Migrante','Nombre')
            ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
            ->where('Edad','>=',$busquedaInicio)
            ->where('Stado','Si')
            ->paginate(10);
            $pdf = PDF::loadView('reportes/pdf/pdf1', compact('datospersonalespacientes','busquedaInicio','busquedaFinal'));
            $pdf->setPaper('A4', 'landscape');
            return $pdf->stream('Reporte_edad.pdf');
        }
        elseif($busquedaInicio==='' && $busquedaFinal===$busquedaFinal)
        {
            $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
            'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
            'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente','Edad',
            'Migrante','Nombre')
            ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
            ->where('Edad','<=',$busquedaFinal)
            ->where('Stado','Si')
            ->paginate(10);
            $pdf = PDF::loadView('reportes/pdf/pdf1', compact('datospersonalespacientes','busquedaInicio','busquedaFinal'));
            $pdf->setPaper('A4', 'landscape');
            return $pdf->stream('Reporte_edad.pdf');
        }
        else{
            $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
            'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
            'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente','Edad',
            'Migrante','Nombre')
            ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
            ->where('Edad','>=',$busquedaInicio)
            ->where('Edad','<=',$busquedaFinal)
            ->where('Stado','Si')
            ->paginate(10);
            $pdf = PDF::loadView('reportes/pdf/pdf1', compact('datospersonalespacientes','busquedaInicio','busquedaFinal'));
            $pdf->setPaper('A4', 'landscape');
            return $pdf->stream('Reporte_edad.pdf');
        }
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
    public function r3(Request $request)
    {$busqueda = trim($request->get('filtro'));
        $busquedaFinal = trim($request->get('filtrofinal'));
        $busquedaDPI = trim($request->get('filtroDPI'));
        $busquedaNombre = trim($request->get('filtroNombre'));
        $busquedaApellido = trim($request->get('filtroApellido'));

        $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
        'CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
        'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente',
        'Migrante','Nombre')
        ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
        ->where('FechaNaciemientoPaciente','LIKE','%'.$busqueda.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
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
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->count('idDatosPersonalesPacientes');

        $union = compact('datospersonalespacientes','busqueda','busquedaFinal','busquedaDPI','totalpacientes','busquedaNombre','busquedaApellido');
        return view('reportes.r3', $union );
    }

    public function pdf3(Request $request)
    {
        $busqueda = trim($request->get('filtro'));
        $busquedaDPI = trim($request->get('filtroDPI'));
        $busquedaNombre = trim($request->get('filtroNombre'));
        $busquedaApellido = trim($request->get('filtroApellido'));

        $datospersonalespacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente','CUI','ProfesionOficio','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion',
        'Municipiodep','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente',
        'Migrante','Nombre')
        ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
        ->where('FechaNaciemientoPaciente','LIKE','%'.$busqueda.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->paginate(10);

        $totalpacientes = datospersonalespaciente::select('idDatosPersonalesPacientes','NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente',
        'CUI','Descripciondireccion','Grupodireccion','Celular','EstadoCivil','Peso','TipoSanguineo','Nombre')
        ->join('pueblos', 'pueblos.idPueblo', '=','datospersonalespacientes.pueblo_id')
        ->where('FechaNaciemientoPaciente','LIKE','%'.$busqueda.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->count('idDatosPersonalesPacientes');
        $union = compact('datospersonalespacientes','busqueda','busquedaDPI','totalpacientes','busquedaNombre','busquedaApellido');
        $pdf = PDF::loadView('reportes/pdf/pdf3', $union);
        return $pdf->stream('Reporte de mujeres en alto riesgo.pdf');
            
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
    public function r6(Request $request)
    {
        /*$cant_infantes = infante::count();
        if($cant_infantes === 0)
        {
            $busquedar6Pag = trim($request->get('filtror6Pag'));
            $busquedar6FechaI = trim($request->get('filtror6FechaI'));
            $busquedar6FechaF = trim($request->get('filtror6FechaF'));
            if($busquedar6FechaI === '' && $busquedar6FechaF === '' )
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('Estado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate($busquedar6Pag);
                return view('reportes.r6', compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF'));
            }
            elseif($busquedar6FechaI === '' && $busquedar6FechaF === $busquedar6FechaF )
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','<=',$busquedar6FechaF)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->paginate($busquedar6Pag);
                return view('reportes.r6', compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF'));
            }
            elseif($busquedar6FechaI === $busquedar6FechaI && $busquedar6FechaF === '')
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','>=',$busquedar6FechaI)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->paginate($busquedar6Pag);
                return view('reportes.r6', compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF'));
            }
            else{
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','>=',$busquedar6FechaI)
                ->where('FechaNacimiento','<=',$busquedar6FechaF)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->paginate($busquedar6Pag);
                return view('reportes.r6', compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF'));
            }
        }
        else{*/
            $busquedar6Pag = trim($request->get('filtror6Pag'));
            $busquedar6FechaI = trim($request->get('filtror6FechaI'));
            $busquedar6FechaF = trim($request->get('filtror6FechaF'));
            if($busquedar6FechaI === '' && $busquedar6FechaF === '' )
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('Estado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate($busquedar6Pag);
                return view('reportes.r6', compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF'));
            }
            elseif($busquedar6FechaI === '' && $busquedar6FechaF === $busquedar6FechaF )
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','<=',$busquedar6FechaF)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->paginate($busquedar6Pag);
                return view('reportes.r6', compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF'));
            }
            elseif($busquedar6FechaI === $busquedar6FechaI && $busquedar6FechaF === '')
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','>=',$busquedar6FechaI)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->paginate($busquedar6Pag);
                return view('reportes.r6', compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF'));
            }
            else{
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','>=',$busquedar6FechaI)
                ->where('FechaNacimiento','<=',$busquedar6FechaF)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->paginate($busquedar6Pag);
                return view('reportes.r6', compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF'));
            }
            
        //}
    }

    public function pdf6(Request $request){
        /*$cant_infantes = infante::count();
        if($cant_infantes === 0)
        {
            $busquedar6Pag = trim($request->get('filtror6Pag'));
            $busquedar6FechaI = trim($request->get('filtror6FechaI'));
            $busquedar6FechaF = trim($request->get('filtror6FechaF'));
            if($busquedar6FechaI === '' && $busquedar6FechaF === '' )
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('Estado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate($busquedar6Pag);
                return view('reportes.r6', compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF'));
            }
            elseif($busquedar6FechaI === '' && $busquedar6FechaF === $busquedar6FechaF )
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','<=',$busquedar6FechaF)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->paginate($busquedar6Pag);
                return view('reportes.r6', compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF'));
            }
            elseif($busquedar6FechaI === $busquedar6FechaI && $busquedar6FechaF === '')
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','>=',$busquedar6FechaI)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->paginate($busquedar6Pag);
                return view('reportes.r6', compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF'));
            }
            else{
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','>=',$busquedar6FechaI)
                ->where('FechaNacimiento','<=',$busquedar6FechaF)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->paginate($busquedar6Pag);
                return view('reportes.r6', compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF'));
            }
        }
        else{*/
            $busquedar6Pag = trim($request->get('filtror6Pag'));
            $busquedar6FechaI = trim($request->get('filtror6FechaI'));
            $busquedar6FechaF = trim($request->get('filtror6FechaF'));
            if($busquedar6FechaI === '' && $busquedar6FechaF === '' )
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('Estado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate($busquedar6Pag);

                $infantescount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('Estado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');


                $pdf = PDF::loadView('reportes/pdf/pdf6',compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF','infantescount'));
                //pagina lado horizontal
                $pdf->setPaper('A4', 'landscape');
                return $pdf->stream('Reporte de pacientes.pdf');

            }
            elseif($busquedar6FechaI === '' && $busquedar6FechaF === $busquedar6FechaF )
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','<=',$busquedar6FechaF)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->paginate($busquedar6Pag);

                $infantescount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','<=',$busquedar6FechaF)
                ->where('Estado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');


                $pdf = PDF::loadView('reportes/pdf/pdf6',compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF','infantescount','busquedar6FechaI','busquedar6FechaF'));
                //pagina lado horizontal
                $pdf->setPaper('A4', 'landscape');
                return $pdf->stream('Reporte de pacientes.pdf');
            }
            elseif($busquedar6FechaI === $busquedar6FechaI && $busquedar6FechaF === '')
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','>=',$busquedar6FechaI)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->paginate($busquedar6Pag);

                $infantescount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','>=',$busquedar6FechaI)
                ->where('Estado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');


                $pdf = PDF::loadView('reportes/pdf/pdf6',compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF','infantescount','busquedar6FechaI','busquedar6FechaF'));
                //pagina lado horizontal
                $pdf->setPaper('A4', 'landscape');
                return $pdf->stream('Reporte de pacientes.pdf');
            }
            else{
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','>=',$busquedar6FechaI)
                ->where('FechaNacimiento','<=',$busquedar6FechaF)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->paginate($busquedar6Pag);

                $infantescount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','NombresPaciente','ApellidosPaciente','CUI','Estado')
                ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','infantes.DatosPersonalesPacientes_id')
                ->where('FechaNacimiento','>=',$busquedar6FechaI)
                ->where('FechaNacimiento','<=',$busquedar6FechaF)
                ->orderByDesc('FechaNacimiento')
                ->where('Estado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');


                $pdf = PDF::loadView('reportes/pdf/pdf6',compact('infantes','busquedar6Pag','busquedar6FechaI','busquedar6FechaF','infantescount','busquedar6FechaI','busquedar6FechaF'));
                //pagina lado horizontal
                $pdf->setPaper('A4', 'landscape');
                return $pdf->stream('Reporte de pacientes.pdf');
            }
            
        //}

    }

    //Infantes atendidos menores a cinco años
    public function r7()
    {
        return view('reportes.r7');
    }

    //Infantes que concluyen con la etapa de vacunación
    public function r8(Request $request)
    {
        $cant_infantes = infante::count();
        if($cant_infantes === 0)
        {
            $busquedar8Nombre = trim($request->get('filtror8Nombre'));
            $busquedar8Apellido = trim($request->get('filtror8Apellido'));

            if ($busquedar8Nombre === '' && $busquedar8Apellido === '')
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
    
                $infantesinfluenzas = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
                
                $infantesCovids = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
    
                $infantesTdAps = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
    
                return view('reportes.r8', compact('infantes','infantesinfluenzas','infantesCovids','infantesTdAps','busquedar8Nombre','busquedar8Apellido'));
            }
            elseif ($busquedar8Nombre === $busquedar8Nombre && $busquedar8Apellido === '')
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesinfluenzas = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
                
                $infantesCovids = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesTdAps = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                return view('reportes.r8', compact('infantes','infantesinfluenzas','infantesCovids','infantesTdAps','busquedar8Nombre','busquedar8Apellido'));
            }
            elseif ($busquedar8Nombre === '' && $busquedar8Apellido === $busquedar8Apellido)
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesinfluenzas = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
                
                $infantesCovids = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesTdAps = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                return view('reportes.r8', compact('infantes','infantesinfluenzas','infantesCovids','infantesTdAps','busquedar8Nombre','busquedar8Apellido'));
            }
            else{
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesinfluenzas = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
                
                $infantesCovids = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesTdAps = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                return view('reportes.r8', compact('infantes','infantesinfluenzas','infantesCovids','infantesTdAps','busquedar8Nombre','busquedar8Apellido'));
            }
        }
        else{
            $busquedar8Nombre = trim($request->get('filtror8Nombre'));
            $busquedar8Apellido = trim($request->get('filtror8Apellido'));

            if ($busquedar8Nombre === '' && $busquedar8Apellido === '')
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
    
                $infantesinfluenzas = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
                
                $infantesCovids = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
    
                $infantesTdAps = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
    
                return view('reportes.r8', compact('infantes','infantesinfluenzas','infantesCovids','infantesTdAps','busquedar8Nombre','busquedar8Apellido'));
            }
            elseif ($busquedar8Nombre === $busquedar8Nombre && $busquedar8Apellido === '')
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesinfluenzas = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
                
                $infantesCovids = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesTdAps = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                return view('reportes.r8', compact('infantes','infantesinfluenzas','infantesCovids','infantesTdAps','busquedar8Nombre','busquedar8Apellido'));
            }
            elseif ($busquedar8Nombre === '' && $busquedar8Apellido === $busquedar8Apellido)
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesinfluenzas = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
                
                $infantesCovids = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesTdAps = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                return view('reportes.r8', compact('infantes','infantesinfluenzas','infantesCovids','infantesTdAps','busquedar8Nombre','busquedar8Apellido'));
            }
            else{
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesinfluenzas = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
                
                $infantesCovids = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesTdAps = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                return view('reportes.r8', compact('infantes','infantesinfluenzas','infantesCovids','infantesTdAps','busquedar8Nombre','busquedar8Apellido'));
            }
        }
    }

    public function pdf8(Request $request){
        
            $busquedar8Nombre = trim($request->get('filtror8Nombre'));
            $busquedar8Apellido = trim($request->get('filtror8Apellido'));

            if ($busquedar8Nombre === $busquedar8Nombre && $busquedar8Apellido === '')
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantescount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');

                $infantesinfluenzas = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesinfluenzascount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');
                
                $infantesCovids = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
                
                $infantesCovidscount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');

                $infantesTdAps = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesTdApscount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');

                $pdf = PDF::loadView('reportes/pdf/pdf8',compact('infantes','infantesinfluenzas','infantesCovids','infantesTdAps','busquedar8Nombre','busquedar8Apellido','infantesTdApscount','infantesCovidscount','infantesinfluenzascount','infantescount'));
                //pagina lado horizontal
                //$pdf->setPaper('A4', 'landscape');
                return $pdf->stream('Reporte de pacientes.pdf');
            }
            elseif ($busquedar8Nombre === '' && $busquedar8Apellido === $busquedar8Apellido)
            {
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantescount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');

                $infantesinfluenzas = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesinfluenzascount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');
                
                $infantesCovids = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesCovidscount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');

                $infantesTdAps = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesTdApscount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');

                $pdf = PDF::loadView('reportes/pdf/pdf8',compact('infantes','infantesinfluenzas','infantesCovids','infantesTdAps','busquedar8Nombre','busquedar8Apellido','infantesTdApscount','infantesCovidscount','infantesinfluenzascount','infantescount'));
                //pagina lado horizontal
                //$pdf->setPaper('A4', 'landscape');
                return $pdf->stream('Reporte de pacientes.pdf');
            }
            else{
                $infantes = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);
                
                $infantescount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Td')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');

                $infantesinfluenzas = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesinfluenzascount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Influenza')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');
                
                $infantesCovids = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesCovidscount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','Covid')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');

                $infantesTdAps = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->paginate(100);

                $infantesTdApscount = infante::select('idInfantes','Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','Altura','Observaciones','FechaEgreso','infantes.TipoSanguineo','infantes.DatosPersonalesPacientes_id','infantes.idDatosFamiliares','infantes.Parentesco','vacunainfantes.Tado','vacunainfantes.Vacunas_id','NombreVacuna')
                ->join('vacunainfantes', 'vacunainfantes.Infante_id', '=','infantes.idInfantes')
                ->join('vacunas', 'vacunas.idVacunas', '=','vacunainfantes.Vacunas_id')
                ->where('NombreVacuna','TdAp')
                ->where('Nombres','LIKE','%'.$busquedar8Nombre.'%')
                ->where('Apellidos','LIKE','%'.$busquedar8Apellido.'%')
                ->where('vacunainfantes.Tado','Si')
                ->orderByDesc('FechaNacimiento')
                ->count('idInfantes');



                $pdf = PDF::loadView('reportes/pdf/pdf8',compact('infantes','infantesinfluenzas','infantesCovids','infantesTdAps','busquedar8Nombre','busquedar8Apellido','infantesTdApscount','infantesCovidscount','infantesinfluenzascount','infantescount'));
                //pagina lado horizontal
                //$pdf->setPaper('A4', 'landscape');
                return $pdf->stream('Reporte de pacientes.pdf');
            }

    }

    //Índice de muertes maternas
    public function r9()
    {
        return view('reportes.r9');
    }

    //Índice de abortos
    public function r10(Request $request)
    {
        $busquedafiltro = trim($request->get('filtro'));
        $busquedaFinal = trim($request->get('filtrofinal'));
        $busquedaDPI = trim($request->get('filtroDPI'));
        $busquedaNombre = trim($request->get('filtroNombre'));
        $busquedaApellido = trim($request->get('filtroApellido'));
        if($busqueda==='' && $busquedaFinal==='' ){
            $datospersonalespacientes = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Estado')
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')       
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('Estado','Si')
        ->paginate(10);

        $union = compact('datospersonalespacientes','busquedaFinal','busquedaDPI','busquedaNombre','busquedaApellido');
        return view('reportes.r10', $union );
        }elseif($busqueda==='' && $busquedaFinal=== $busquedaFinal){
            $datospersonalespacientes = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Estado')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')       
            ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
            ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
            ->where('FechaAborto','<=', $busquedaFinal)
            ->where('CUI','LIKE','%'.$busquedaDPI.'%')
            ->where('Estado','Si')
            ->paginate(10);
    
            $union = compact('datospersonalespacientes','busquedaFinal','busquedaDPI','busquedaNombre','busquedaApellido');
            return view('reportes.r10', $union );
        }elseif($busqueda===$busqueda && $busquedaFinal===''){
            $datospersonalespacientes = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Estado')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')       
            ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
            ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
            ->where('FechaAborto','>=',$busqueda)
            ->where('CUI','LIKE','%'.$busquedaDPI.'%')
            ->where('Estado','Si')
            ->paginate(10);
    
            $union = compact('datospersonalespacientes','busquedaFinal','busquedaDPI','busquedaNombre','busquedaApellido');
            return view('reportes.r10', $union );
        }
        else{
            $datospersonalespacientes = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Estado')
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')       
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->where('FechaAborto','>=',$busqueda)
        ->where('FechaAborto','<=', $busquedaFinal)
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('Estado','Si')
        ->paginate(10);

        $union = compact('datospersonalespacientes','busquedaFinal','busquedaDPI','busquedaNombre','busquedaApellido');
        return view('reportes.r10', $union );
        }   
    }
    public function pdf10(Request $request)
    {
        $busqueda = trim($request->get('filtro'));
        $busquedaFinal = trim($request->get('filtrofinal'));
        $busquedaDPI = trim($request->get('filtroDPI'));
        $busquedaNombre = trim($request->get('filtroNombre'));
        $busquedaApellido = trim($request->get('filtroApellido'));
        if($busqueda==='' && $busquedaFinal==='' ){
            $datospersonalespacientes = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Estado')
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')       
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('Estado','Si')
        ->paginate(10);

        $datospersonalespacientescount = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Estado')
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')       
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('Estado','Si')
        ->count('idAbortos');

        $union = compact('datospersonalespacientes','busqueda','busquedaFinal','busquedaDPI','busquedaNombre','busquedaApellido','datospersonalespacientescount');
        $pdf = PDF::loadView('reportes/pdf/pdf10', $union);
        return $pdf->stream('Reporte de abortos.pdf');
        }
        elseif($busqueda==='' && $busquedaFinal=== $busquedaFinal){
            $datospersonalespacientes = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Estado')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')       
            ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
            ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
            ->where('FechaAborto','<=', $busquedaFinal)
            ->where('CUI','LIKE','%'.$busquedaDPI.'%')
            ->where('Estado','Si')
            ->paginate(10);

            $datospersonalespacientescount = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Estado')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')       
            ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
            ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
            ->where('FechaAborto','<=', $busquedaFinal)
            ->where('CUI','LIKE','%'.$busquedaDPI.'%')
            ->where('Estado','Si')
            ->count('idAbortos');
    
            $union = compact('datospersonalespacientes','busqueda','busquedaFinal','busquedaDPI','busquedaNombre','busquedaApellido','datospersonalespacientescount');
        $pdf = PDF::loadView('reportes/pdf/pdf10', $union);
        return $pdf->stream('Reporte de abortos.pdf');
        }
        elseif($busqueda===$busqueda && $busquedaFinal===''){
            $datospersonalespacientes = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Estado')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')       
            ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
            ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
            ->where('FechaAborto','>=',$busqueda)
            ->where('CUI','LIKE','%'.$busquedaDPI.'%')
            ->where('Estado','Si')
            ->paginate(10);

            $datospersonalespacientescount = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Estado')
            ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')       
            ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
            ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
            ->where('FechaAborto','>=',$busqueda)
            ->where('CUI','LIKE','%'.$busquedaDPI.'%')
            ->where('Estado','Si')
            ->count('idAbortos');
    
            $union = compact('datospersonalespacientes','busqueda','busquedaFinal','busquedaDPI','busquedaNombre','busquedaApellido','datospersonalespacientescount');
        $pdf = PDF::loadView('reportes/pdf/pdf10', $union);
        return $pdf->stream('Reporte de abortos.pdf');
        }
        
        else{
        $datospersonalespacientes = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Estado')
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')       
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->where('FechaAborto','>=',$busqueda)
        ->where('FechaAborto','<=', $busquedaFinal)
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('Estado','Si')
        ->paginate(10);

        $datospersonalespacientescount = Aborto::select('idAbortos','DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto', 'NombresPaciente','ApellidosPaciente','CUI','Estado')
        ->join('datospersonalespacientes', 'datospersonalespacientes.idDatosPersonalesPacientes', '=','abortos.DatosPersonalesPacientes_id')       
        ->where('NombresPaciente','LIKE','%'.$busquedaNombre.'%')
        ->where('ApellidosPaciente','LIKE','%'.$busquedaApellido.'%')
        ->where('FechaAborto','>=',$busqueda)
        ->where('FechaAborto','<=', $busquedaFinal)
        ->where('CUI','LIKE','%'.$busquedaDPI.'%')
        ->where('Estado','Si')
        ->count('idAbortos');

        $union = compact('datospersonalespacientes','busqueda','busquedaFinal','busquedaDPI','busquedaNombre','busquedaApellido','datospersonalespacientescount');
        $pdf = PDF::loadView('reportes/pdf/pdf10', $union);
        return $pdf->stream('Reporte de abortos.pdf');}
     
    }
    //Alertas de ausencia de pacientes a citas 
    public function r11()
    {
        return view('reportes.r11');
    }

    //Alerta de insumos que se estén agotando y que se prontos a la fecha de caducidad.
    public function r12()
    {
        $vacunainfanteid = vacunainfante::where('Vacunas_id','1')->count('idVacunasInfantes');

        for($i= 1; $i <= 100000; $i++)
        {
            $vacunas = vacuna::select('NombreVacuna','TipoVacuna','EstadoVacuna','Fechaingreso','FechaVencimiento','Cantidad')->where('Estado','Si')->where('idVacunas',$i)->paginate(1);

            return view('reportes.r12', compact('vacunas'));
            
        }

        /*
        $vacunas = vacuna::select('NombreVacuna','TipoVacuna','EstadoVacuna','Fechaingreso','FechaVencimiento','Cantidad')->where('Estado','Si')->where('idVacunas','1')->paginate(1);
        
        $vacunas2 = vacuna::select('NombreVacuna','TipoVacuna','EstadoVacuna','Fechaingreso','FechaVencimiento','Cantidad')->where('Estado','Si')->where('idVacunas','2')->paginate(1);

        $vacunas3 = vacuna::select('NombreVacuna','TipoVacuna','EstadoVacuna','Fechaingreso','FechaVencimiento','Cantidad')->where('Estado','Si')->where('idVacunas','3')->paginate(1);

        $vacunas4 = vacuna::select('NombreVacuna','TipoVacuna','EstadoVacuna','Fechaingreso','FechaVencimiento','Cantidad')->where('Estado','Si')->where('idVacunas','4')->paginate(1);*/

        //return view('reportes.r12', compact('vacunas','vacunas2','vacunas3','vacunas4'));
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
