<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class controlposparto extends Model
{
    use HasFactory; 

    protected $table = 'controlpospartos';
    protected $primaryKey = 'idControlPosparto';
    protected $fillable  = ['NoControl','FCEvaluacionPosparto_id','SemanasDespuesParto','FechaVisita','InvolucionUterina','ExamenMamas','HeridaOperatiria','ExamenGInecológico','PresionArterial','MMHG','FrecuenciaCardiaca','Temperatura','LactanciaMaterna','ProblemasDetectados','SulfatoFerroso','AcidoFolico','VacuncacionTdapMadre','Medicamento','LactanciaMaternaExclusiva','PlanificacionFamiliarPosparto','AlimentacionMadreLactante','LactanciaMaternaVIH','MujerVIH','Usuario_id', 'Estado'];

    public function fcprenatalpostpartos()
    {
        return $this->belongsTo('App\Models\fcprenatalpostparto', 'FCEvaluacionPosparto_id', 'idFCPrenatalPostpartos ');
    }

    public function datospersonalespacientes()
    {
        return $this->belongsTo('App\Models\datospersonalespaciente', 'DatosPersonalesPacientes_id', 'idDatosPersonalesPacientes');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }
}
