<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingreso
 *
 * @property $id
 * @property $tipingresos_id
 * @property $oficina_id
 * @property $comp_id
 * @property $FechIngreso
 * @property $concepto
 * @property $monto
 * @property $origenIngreso
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Comp $comp
 * @property Detalleingreso[] $detalleingresos
 * @property Oficina $oficina
 * @property Tipingreso $tipingreso
 * @property Encargado $encargados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingreso extends Model
{
    
    static $rules = [
		'tipingresos_id' => 'required',
		'oficina_id' => 'required',
		'comp_id' => 'required',
		'FechIngreso' => 'required',
		'concepto' => 'required',
		'monto' => 'required',
		'origenIngreso' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipingresos_id','oficina_id','comp_id','FechIngreso','concepto','monto','origenIngreso','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comp()
    {
        return $this->hasOne('App\Models\Comp', 'id', 'comp_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleingresos()
    {
        return $this->hasMany('App\Models\Detalleingreso', 'ingresos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function oficina()
    {
        return $this->hasOne('App\Models\Oficina', 'id', 'oficina_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipingreso()
    {
        return $this->hasOne('App\Models\Tipingreso', 'id', 'tipingresos_id');
    }

}
