<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fcevaluacionposparto extends Model
{
    use HasFactory; 
    protected $table = 'fcevaluacionpospartos';
    protected $primaryKey = 'idFCEvaluacionPosparto';
    protected $fillable  = ['FCPrenatalPostparto_id','FechaEvaluacionPosparto','DatosPersonalesPacientes_id','HemorragiaVaginal','DolordeCabeza','VisionBorrosa','Convulsion','DolorAbdominal','PresionArterialSignos','Fiebre','Coagulos','RegistroReferencia','NombreServicio','DiasDespuesParto','EstablecimientoSalud_id','Personal_idD',
    'HeridaOperatoria','InvolucionUterina','PresionArterial','FrecuenciaCardiaca','Temperatura',
    'ExamenMamas','ExamenGinecologico','LactanciaMaterna','PorqueNoLactanciaMaterna','Diagnostico',
    'ConductaTratamiento','Usuario_id','SulfatoFerroso','AcidoFolico','OtroMedicamento','Tdap','ConsejeriaPF_Posparto','ConsejeriaLactanciaAlimentacion','ConsejeriaLactanciaMujerVIH','ConsejeriaMujerVIH',];

          
    public function datospersonalespacientes()
    {
        return $this->belongsTo('App\Models\datospersonalespaciente', 'DatosPersonalesPacientes_id', 'idDatosPersonalesPacientes');
    }
    
    public function establecimientosaludos()
    {
        return $this->belongsTo('App\Models\establecimientosaludo', 'EstablecimientoSalud_id', 'idEstablecimientoSaludos');
    }

    public function fcprenatalpostpartos()
    {
        return $this->belongsTo('App\Models\fcprenatalpostparto', 'FCPrenatalPostparto_id', 'idFCPrenatalPostpartos');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }

    public function personaless()
    {
        return $this->belongsTo('App\Models\personale', 'Personal_idD', 'idPersonal');
    }
}
