<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personale extends Model
{
    use HasFactory;
    protected $table = 'personales';
    protected $primaryKey = 'idPersonal';
    protected $fillable = ['Nombre','CUI','Telefono','Direccion','Cargo','FechaNacimiento','NivelAcademico','CorreoElectronico','Observaciones'];
}
