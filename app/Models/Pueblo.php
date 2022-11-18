<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pueblo extends Model
{
    use HasFactory;
    protected $table = 'pueblos';
    protected $primaryKey = 'idPueblo';
    protected $fillable  = ['Nombre','Usuario_id', 'Estado'];

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }
}
