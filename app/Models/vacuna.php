<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacuna extends Model 
{
    use HasFactory;
    protected $table = 'vacunas';
    protected $primaryKey = 'idVacunas';
    protected $fillable  = ['NombreVacuna','TipoVacuna','EstadoVacuna','Fechaingreso','FechaVencimiento','Cantidad','Usuario_id', 'Estado'];

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }
}
