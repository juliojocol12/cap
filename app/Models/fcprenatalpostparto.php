<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fcprenatalpostparto extends Model
{ 
    use HasFactory;
    protected $table = 'fcprenatalpostpartos';
    protected $primaryKey = 'idFCPrenatalPostpartos';
    protected $fillable  = ['ExpedienteNo','Fecha','DatosPersonalesPacientes_id','EstablecimientoSalud_id','HemorragiaVaginal','DolordeCabeza','VisionBorrosa','Convulsion','DolorAbdominal','PresionArterial','Fiebre','PresentacionesFetales','RegistrodeReferencia','MotivoConsulta','HistoriaEnfermedadActual','AnteObstetricos_id','AntecedentesMedicos_id',];

    /*public function datospersonalespacientes()
    {
        return $this->belongsTo('App\Models\datospersonalespaciente', 'DatosPersonalesPacientes_id', 'idDatosPersonalesPacientes');
    }
    public function datosfamiliares()
    {
        return $this->belongsTo('App\Models\DatosFamiliare', 'idDatosFamiliares', 'idDatosFamiliares');
    }*/
}
