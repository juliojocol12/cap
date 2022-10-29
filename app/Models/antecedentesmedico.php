<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class antecedentesmedico extends Model
{
    use HasFactory;
    protected $table = 'antecedentesmedicos';
    protected $primaryKey = 'idAntecedentesMedico';
    protected $fillable  = ['AsmaBronquial','HipertensionArterial','Cancer','ITS','Chagas','TomaMedicamentos','TrastornoPiscoSocial','ViolenciaGenero','Diabetes','Cardiopatia','Tuberculosis','Neuropatia','InfeccionesUrinarias','ViolenciaInrtraFamiliar','TipoSangre','Quirurgicos','Fuma','BebidasAlcoholicas','ConsumoDrogas','AntecedentesVacunas','DosisVacuna','FechaUltimaDosis','SR','OtrosAntecedentes',];

}
