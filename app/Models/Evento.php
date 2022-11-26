<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    use HasFactory;
    protected $table = 'eventos';

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }

    public function datospersonalespacientes()
    {
        return $this->belongsTo('App\Models\datospersonalespaciente', 'datosPersonalesPacientes_id', 'idDatosPersonalesPacientes');
    }
    
    public function establecimientosaludos()
    {
        return $this->belongsTo('App\Models\establecimientosaludo', 'Establecimientoid', 'idEstablecimientoSaludos');
    }
}
