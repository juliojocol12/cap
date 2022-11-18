<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infante extends Model
{
    use HasFactory;
    protected $table = 'infantes';
    protected $primaryKey = 'idInfantes';
    protected $fillable  = ['Nombres','Apellidos','Genero','FechaNacimiento','HoraNaciemiento','PesoLB','PesoOnz','Altura','Observaciones','FechaEgreso','TipoSanguineo','DatosPersonalesPacientes_id','idDatosFamiliares','Parentesco','Usuario_id', 'Estado'];

    public function datospersonalespacientes()
    {
        return $this->belongsTo('App\Models\DatosPersonalesPaciente', 'DatosPersonalesPacientes_id', 'idDatosPersonalesPacientes');
    }
    public function datosfamiliares()
    {
        return $this->belongsTo('App\Models\DatosFamiliare', 'idDatosFamiliares', 'idDatosFamiliares');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }
}
