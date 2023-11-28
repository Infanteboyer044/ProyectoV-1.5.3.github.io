<?php

namespace App\Models;
use App\Models\Encargado;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Oficina
 *
 * @property $id
 * @property $encargados_id
 * @property $nombre
 * @property $fono
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Encargado $encargado
 * @property Ingreso[] $ingresos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Oficina extends Model
{
    
    static $rules = [
		'encargados_id' => 'required',
		'nombre' => 'required',
		'fono' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['encargados_id','nombre','fono','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function encargado()
    {
        return $this->hasOne('App\Models\Encargado', 'id', 'encargados_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingresos()
    {
        return $this->hasMany('App\Models\Ingreso', 'oficina_id', 'id');
    }
}
// Obtener el encargado por su ID

?>
