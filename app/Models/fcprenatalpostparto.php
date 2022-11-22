<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fcprenatalpostparto extends Model
{ 
    use HasFactory;
    protected $table = 'fcprenatalpostpartos';
    protected $primaryKey = 'idFCPrenatalPostpartos';
    protected $fillable  = ['Fecha','DatosPersonalesPacientes_id','EstablecimientoSalud_id','HemorragiaVaginal','DolordeCabeza','VisionBorrosa','Convulsion','DolorAbdominal','PresionArterial','Fiebre','PresentacionesFetales','RegistrodeReferencia','MotivoConsulta','HistoriaEnfermedadActual','FechaUltimaRegla','NoGestas','Partos','Aborto','AbortoConsecutivo','NoLIU','NacidosVivos','NacidosMuertos','HijosVivos','HijosMuertos','NoCesareas','EmbarazoMultiples','FechaUltimoParto','NacidosAntesOchoMeses','PreEclampsia','UltimoRNPesoCincolb','UltimoRNPesoSietelb','DeteccionCancerCervix','FechaDeteccionCancer','ResultadoNormal','MetodoPlanificacionFamiliar','CualMetodoPlanificacionF','AsmaBronquial','HipertensionArterial','Cancer','ITS','Chagas','TomaMedicamentos','TrastornoPiscoSocial','ViolenciaGenero','Diabetes','Cardiopatia','Tuberculosis','Neuropatia','InfeccionesUrinarias','ViolenciaInrtraFamiliar','TipoSangre','Quirurgicos','Fuma','BebidasAlcoholicas','ConsumoDrogas','SR','OtrosAntecedentes','Usuario_id', 'Estado', 'VacunaTdAp','DosisVacunaTdAp','FechaVacunaTdAp','VacunaTd','DosisVacunaTd','FechaVacunaTd','VacunaInfluenza','DosisVacunaInfluenza','FechaVacunaInfluenza','VacunaCovid','DosisVacunaCovid','FechaVacunaCovid'];

          
    public function datospersonalespacientes()
    {
        return $this->belongsTo('App\Models\datospersonalespaciente', 'DatosPersonalesPacientes_id', 'idDatosPersonalesPacientes');
    }
    
    public function establecimientosaludos()
    {
        return $this->belongsTo('App\Models\establecimientosaludo', 'EstablecimientoSalud_id', 'idEstablecimientoSaludos');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }
}
