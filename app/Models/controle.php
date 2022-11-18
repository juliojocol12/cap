<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class controle extends Model
{
    use HasFactory;
    protected $table = 'controles';
    protected $primaryKey = 'idControles';
    protected $fillable  = ['NoControl','SemanasEmbarazo','FechaVisita','DatosPersonalesPacientes_id','FCPrenatalPostparto_id','FechaPosibleParto','CircuferenciaBrazo','EvaluacionInicialRapida','DescripcionEvaluacion','PresionArterial','Temperatura','RespiracionPorMinuto','FrecuenciaCardiacaMaternal','Pesolb','Talla','CMB','Diagnostico','IMC_Diagnostico','Accionesicm','GananciaPeso','Accionesganancia','Anemia','DescripcionAnemia','ExamenCardioPulmonar','ExamenMamas','ObservacionAbdominal','AlturaUterina','PresenciaMovimientoFetales','FrecuenciaCardiacaFetal','ManiobrasLeopold','TrazasSangreManchado','DescripcionTrazasSangreManchado','EnfermedadesGinecologicos','DescripcionEnfermedadesGinecologicos','FlujoVaginal',
    
    'PruebasEmbarazo','DecripcionPruebasEmbarazo','Hematologia','DescripcionHematologia','GrupoRH','DescripcionGrupoRH','Orina','DescripcionOrina','Heces','DescirpcionHeces','GlicemiaAyunas','DescripcionGlicemiaAyunas','VDLR','DescripcionVDLR','VIH','DescipcionVIH','TORCH','DescripcionTORCH','PapanicolaouIVAA','DescripcionPapanicolaouIVAA','HepatitisB','DescripcionHepatitisB','OtrosEstudios','SemanasEmbarazoFURAU','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacunacionTdTdap','VacunacionInfluenza','OtrosTratamientos','Referencia','AlimentacionEmbarazo','DescripcionAlimentacionEmbarazo','CuidadosPersonales','DescripcionCuidadosPersonales','SintomasComunes','DescipcionSintomasComunes','SenalesPeligro','DescripcionSenalesPeligro','ConsejeriaPrePostVIH','DescripcionConsejeriaPrePostVIH','PlanParto','DescrpcionPlanParto','PlanEmergencia','DescpcionPlanEmergencia','LactanciaMaterna','DescripcionLactanciaMaterna','ViolenciaSexual','DescipcionViolenciaSexual','MetodosPlanificcion','ImportanciaControlPos','VacunacionRecienNacido','Usuario_id', 'Estado'];

          
    public function datospersonalespacientes()
    {
        return $this->belongsTo('App\Models\datospersonalespaciente', 'DatosPersonalesPacientes_id', 'idDatosPersonalesPacientes');
    }
    
    public function fcprenatalpostpartos()
    {
        return $this->belongsTo('App\Models\fcprenatalpostparto', 'FCPrenatalPostparto_id', 'idFCPrenatalPostpartos');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }
}
 