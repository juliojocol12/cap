<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infante extends Model
{
    use HasFactory;
    protected $table = 'infantes';
    protected $primaryKey = 'idInfantes';
    protected $fillable  = ['Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','PesoOnz','Altura','Observaciones','FechaEgreso','TipoSanguineo','DatosPersonalesPacientes_id','idDatosFamiliares','Parentesco',];

    public function datospersonalespacientes()
    {
        return $this->belongsTo('App\Models\datospersonalespaciente', 'DatosPersonalesPacientes_id', 'idDatosPersonalesPacientes');
    }
    public function datosfamiliares()
    {
        return $this->belongsTo('App\Models\DatosFamiliare', 'idDatosFamiliares', 'idDatosFamiliares');
    }
}
