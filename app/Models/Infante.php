<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infante extends Model
{
    use HasFactory;
    protected $fillable  = ['Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','PesoOnz','Altura','Observaciones','FechaEgreso','TipoSanguineo','DatosPersonalesPaciente_idDatosPersonalesPaciente','DatosFamiliares_idDatosFamiliares'];
}
