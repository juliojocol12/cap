<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conductaposparto extends Model
{
    use HasFactory;
    protected $table = 'conductapospartos';
    protected $primaryKey = 'idConductaPospartos';
    protected $fillable = ['SulfatoFerroso','AcidoFolico','VacuncacionTdapMadre','Medicamento'];
}
