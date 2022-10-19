<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consejeriaposparto extends Model
{
    use HasFactory;
    protected $table = 'consejeriapospartos';
    protected $primaryKey = 'idConsejeriaPospartos';
    protected $fillable = ['LactanciaMaternaExclusiva','PlanificacionFamiliarPosparto','AlimentacionMadreLactante','LactanciaMaternaVIH','MujerVIH'];
}
