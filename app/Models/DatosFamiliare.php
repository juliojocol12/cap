<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datosfamiliare extends Model
{
    use HasFactory;
    protected $guarded  = [];
    protected $primaryKey = 'idDatosFamiliares';
    protected $fillable  = ['NombresFamiliar','ApellidosFamiliar','CUI','EstadoCivil','ProfesionOficio','Domicilio','TelefonoFamiliar','CelularFamiliar','Usuario_id', 'Estado'];

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }
}