<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    use HasFactory;
    protected $table = 'eventos';

    public function usuarios()
    {
        return $this->belongsTo('App\Models\User', 'Usuario_id', 'id');
    }
}
