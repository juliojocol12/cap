<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Establecimiento
 *
 * @property $id
 * @property $nombrest
 * @property $direccionest
 * @property $telefonoest
 * @property $created_at
 * @property $updated_at
 *
 * @property Examene[] $examenes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Establecimiento extends Model
{
    
    static $rules = [
		'nombrest' => 'required',
		'direccionest' => 'required',
		'telefonoest' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombrest','direccionest','telefonoest'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function examenes()
    {
        return $this->hasMany('App\Models\Examene', 'establecimiento_id', 'id');
    }
    

}
