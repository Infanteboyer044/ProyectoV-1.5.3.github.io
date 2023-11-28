<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalleingreso
 *
 * @property $id
 * @property $ingresos_id
 * @property $fecha
 * @property $descripcion
 * @property $monto
 * @property $fuente_dest
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Ingreso $ingreso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalleingreso extends Model
{
    
    static $rules = [
		'ingresos_id' => 'required',
		'fecha' => 'required',
		'descripcion' => 'required',
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
    protected $fillable = ['ingresos_id','fecha','descripcion','monto','fuente_dest','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ingreso()
    {
        return $this->hasOne('App\Models\Ingreso', 'id', 'ingresos_id');
    }
    

}
