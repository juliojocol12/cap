<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aborto extends Model
{
    use HasFactory;
    protected $table = 'abortos';
    protected $primaryKey = 'idAbortos';
    protected $fillable  = ['DatosPersonalesPacientes_id', 'Antecedente','Descripcion', 'FechaAborto','Usuario_id', 'Estado'];

    public function datospersonalespacientes()
    {
        return $this->belongsTo('App\Models\datospersonalespaciente', 'DatosPersonalesPacientes_id', 'idDatosPersonalesPacientes');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }
}
