<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacunainfante extends Model
{
    use HasFactory;
    protected $table = 'vacunainfantes';
    protected $primaryKey = 'idVacunasInfantes';
    protected $fillable  = ['FechaSuministro','Vacunas_id','Infante_id','Usuario_id', 'Estado'];

    public function vacunas()
    {
        return $this->belongsTo('App\Models\vacuna', 'Vacunas_id', 'idVacunas');
    }

    public function infantes()
    {
        return $this->belongsTo('App\Models\Infante', 'Infante_id', 'idInfantes');
    }

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }
 

}
