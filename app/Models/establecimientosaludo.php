<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class establecimientosaludo extends Model
{
    use HasFactory;
    protected $table = 'establecimientosaludos';
    protected $primaryKey = 'idEstablecimientoSaludos';
    protected $fillable  = ['Nombre','Direccion','Comunidad','PuestoSalud','Usuario_id', 'Estado'];

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }
}
