<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clasificacionposparto extends Model
{
    use HasFactory;
    protected $table = 'clasificacionpospartos';
    protected $primaryKey = 'idClasificacionPospartos';
    protected $fillable = ['ProblemasDetectados'];
}
