<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detallegasto
 *
 * @property $id
 * @property $gastos_id
 * @property $fecha
 * @property $concepto
 * @property $monto
 * @property $fuente_dest
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Gasto $gasto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detallegasto extends Model
{
    
    static $rules = [
		'gastos_id' => 'required',
		'fecha' => 'required',
		'concepto' => 'required',
		'monto' => 'required',
		'fuente_dest' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['gastos_id','fecha','concepto','monto','fuente_dest','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gasto()
    {
        return $this->hasOne('App\Models\Gasto', 'id', 'gastos_id');
    }
    

}
