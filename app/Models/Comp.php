<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comp
 *
 * @property $id
 * @property $TipComp
 * @property $NumComp
 * @property $FechComp
 * @property $Direccion
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Gasto[] $gastos
 * @property Ingreso[] $ingresos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Comp extends Model
{
    
    static $rules = [
		'TipComp' => 'required',
		'NumComp' => 'required',
		'FechComp' => 'required',
		'Direccion' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['TipComp','NumComp','FechComp','Direccion','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gastos()
    {
        return $this->hasMany('App\Models\Gasto', 'comp_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingresos()
    {
        return $this->hasMany('App\Models\Ingreso', 'comp_id', 'id');
    }
    

}
