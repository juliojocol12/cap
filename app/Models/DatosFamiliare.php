<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datosfamiliare extends Model
{
    use HasFactory;
    protected $guarded  = [];
    protected $primaryKey = 'idDatosFamiliares';
    protected $fillable  = ['NombresFamiliar','ApellidosFamiliar','CUI','TelefonoFamiliar','CelularFamiliar'];
}
