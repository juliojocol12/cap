<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    static $rules=[
        'title'=>'required',
        'Descripcion'=>'required',
        /*'DatosPersonalesPacientes_id'=>'required',
        'Personal_idD'=>'required',
        'Usuario_id'=>'required',*/
        'start'=>'required',
        'end'=>'required',
    ];

    protected $fillable  = ['title','Descripcion',/*'DatosPersonalesPacientes_id','Personal_idD','Usuario_id',*/'start','end',];

}
