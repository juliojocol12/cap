<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anteobstretico extends Model
{
    use HasFactory;
    protected $table = '';
    protected $primaryKey = '';
    protected $fillable  = ['FechaUltimaRegla','NoGestas','Partos','Aborto','AbortoConsecutivo','NoLIU','NacidosVivos','NacidosMuertos','HijosVivos','HijosMuertos','NoCesareas','EmbarazoMultiples','FechaUltimoParto','NacidosAntesOchoMeses','PreEclampsia','UltimoRNPesoCincolb','UltimoRNPesoSietelb','DeteccionCancerCervix','FechaDeteccionCancer','ResultadoNormal','MetodoPlanificacionFamiliar','CualMetodoPlanificacionF',];
}
