<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Encargado
 *
 * @property $id
 * @property $nombre
 * @property $apellidos
 * @property $DNI
 * @property $direccion
 * @property $sexo
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Oficina[] $oficinas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Encargado extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'apellidos' => 'required',
		'DNI' => 'required',
		'direccion' => 'required',
		'sexo' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellidos','DNI','direccion','sexo','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function oficinas()
    {
        return $this->hasMany('App\Models\Oficina', 'encargados_id', 'id');
    }
    

}
