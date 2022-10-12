<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Examene
 *
 * @property $id
 * @property $establecimiento_id
 * @property $tipoexamen
 * @property $resultado
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Establecimiento $establecimiento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Examene extends Model
{
    
    static $rules = [
		'establecimiento_id' => 'required',
		'tipoexamen' => 'required',
		'resultado' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['establecimiento_id','tipoexamen','resultado','fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function establecimiento()
    {
        return $this->hasOne('App\Models\Establecimiento', 'id', 'establecimiento_id');
    }
    

}
