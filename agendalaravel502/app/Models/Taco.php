<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Taco
 *
 * @property $id
 * @property $taco
 * @property $tipo
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Taco extends Model
{
    
    static $rules = [
		'taco' => 'required',
		'tipo' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['taco','tipo','precio'];



}
