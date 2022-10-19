<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class padecimientoinfante extends Model
{
    use HasFactory;
    protected $table = 'padecimientoinfantes';
    protected $primaryKey = 'idPadecimientoInfantes';
    protected $fillable = ['TipoControl','FechaControl','DescripcionControl'];
}
