<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class primercontrolpostparto extends Model
{
    use HasFactory;
    protected $table = 'primercontrolpostpartos';
    protected $primaryKey = 'idPrimerControlPostpartos';
    protected $fillable = ['NombreServicio','DiasDespuesParto','EstablecimientoSalud_id','Personal_idD',
    'HeridaOperatoria','InvolucionUterina','PresionArterial','FrecuenciaCardiaca','Temperatura',
    'ExamenMamas','ExamenGinecologico','LactanciaMaterna','PorqueNoLactanciaMaterna','Diagnostico',
    'ConductaTratamiento','Personal_id',];

    public function establecimientosaludos()
    {
        return $this->belongsTo('App\Models\establecimientosaludo', 'EstablecimientoSalud_id', 'idEstablecimientoSaludos');
    }

    public function personaless()
    {
        return $this->belongsTo('App\Models\personale', 'Personal_idD', 'idPersonal');
    }

    public function personalesx()
    {
        return $this->belongsTo('App\Models\personale', 'Personal_id', 'idPersonal');
    }

}
