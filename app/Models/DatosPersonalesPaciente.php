<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datospersonalespaciente extends Model
{
    use HasFactory;
    protected $table = 'datospersonalespacientes';
    protected $primaryKey = 'idDatosPersonalesPacientes';
    protected $fillable  = ['NombresPaciente','ApellidosPaciente','FechaNaciemientoPaciente','CUI','ProfesionOficio','Telefono','Celular','EstadoCivil','Peso','TipoSanguineo','MedicamentosActualmente','Migrante','pueblo_id','idDatosFamiliares','Parentesco','Descripciondireccion','Grupodireccion','Numerodireccion','Zonadireccion','Municipiodep','Usuario_id','Stado'];

    public function pueblos()
    {
        return $this->belongsTo('App\Models\Pueblo', 'pueblo_id', 'idPueblo');
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
