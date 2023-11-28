<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gastosingreso
 *
 * @property $id
 * @property $name
 * @property $oficina
 * @property $descripcion
 * @property $gastos
 * @property $ingreso
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gastosingreso extends Model
{
    
    static $rules = [
		'name' => 'required',
		'oficina' => 'required',
		'descripcion' => 'required',
		'gastos' => 'required',
		'ingreso' => 'required',
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','oficina','descripcion','gastos','ingreso','fecha'];



}
