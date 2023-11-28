<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gasto
 *
 * @property $id
 * @property $tipgasto_id
 * @property $comp_id
 * @property $oficinas_id
 * @property $fechaGasto
 * @property $descripcion
 * @property $monto
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Comp $comp
 * @property Detallegasto[] $detallegastos
 * @property Tipgsto $tipgsto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gasto extends Model
{
    
    static $rules = [
		'tipgasto_id' => 'required',
		'comp_id' => 'required',
        'oficinas_id'=>'required',
		'fechaGasto' => 'required',
		'descripcion' => 'required',
		'monto' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipgasto_id','comp_id','oficinas_id','fechaGasto','descripcion','monto','estado'];


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
    public function detallegastos()
    {
        return $this->hasMany('App\Models\Detallegasto', 'gastos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipgsto()
    {
        return $this->hasOne('App\Models\Tipgsto', 'id', 'tipgasto_id');
    }
    public function oficina()
    {
        return $this->hasOne('App\Models\Oficina', 'id', 'oficinas_id');
    }

}
