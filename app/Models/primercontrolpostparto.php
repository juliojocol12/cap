<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class primercontrolpostparto extends Model
{
    use HasFactory;
    protected $table = 'primercontrolpostpartos';
    protected $primaryKey = 'idPrimerControlPostpartos';
    protected $fillable = ['NombreServicio','EstablecimientoSalud_id','DiasDespuesParto','DondeAtendioParto','QuienAtendioParto',
    'HeridaOperatoria','InvolucionUterina','PresionArterial','FrecuenciaCardiaca','Temperatura',
    'ExamenMamas','ExamenGinecologico','LactanciaMaterna','PorqueNoLactanciaMaterna','Diagnostico',
    'ConductaTratamiento','Personal_id'];
}
