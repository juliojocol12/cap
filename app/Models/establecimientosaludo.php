<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class establecimientosaludo extends Model
{
    use HasFactory;
    protected $table = 'establecimientosaludos';
    protected $primaryKey = 'idEstablecimientoSaludos';
    protected $fillable  = ['Nombre','Direccion','Comunidad','PuestoSalud'];
}
