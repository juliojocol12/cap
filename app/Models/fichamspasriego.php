<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fichamspasriego extends Model
{
    use HasFactory;
    protected $table = 'fichamspasriegos';
    protected $primaryKey = 'idFichamspasriegos';
    protected $fillable  = ['RegistroNo','DatosPersonalesPacientes_id', 'FCPrenatalPostparto_id','Muertefetal','Ancedentesaborto','Antecedentegestas','Pesocinco','Pesonueve','Antecedentehipertension','Cirugiasprevias','Diagnosticosospecha','Menosveinte','Mastreinta','Pacienterh','Hemorragia','VIH','Presionarterial','Anemiaclinica','Desnutricion','Dolorabdominal','Sintomatologia','Ictericia','Diabetes','Enfermedadrenal','Enfermerdadcorazon','Hipertension','Consumodrogas','Cualquierenfermedad','Especifiquefichamspasriegos','Refirio','Fecha','Nombre','Usuario_id', 'Estado'];

          
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
