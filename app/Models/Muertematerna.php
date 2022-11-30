<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muertematerna extends Model
{
    use HasFactory;
    protected $table = 'muertematernas';
    protected $primaryKey = 'idMuerteMaterna';
    protected $fillable  = ['DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaMuerte','Usuario_id', 'Estado','Personal_idD','EstablecimientoSalud_id'];

    public function datospersonalespacientes()
    {
        return $this->belongsTo('App\Models\datospersonalespaciente', 'DatosPersonalesPacientes_id', 'idDatosPersonalesPacientes');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }

    public function personaless()
    {
        return $this->belongsTo('App\Models\personale', 'Personal_idD', 'idPersonal');
    }

    public function establecimientosaludos()
    {
        return $this->belongsTo('App\Models\establecimientosaludo', 'EstablecimientoSalud_id', 'idEstablecimientoSaludos');
    }
}
