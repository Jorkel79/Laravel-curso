<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 *
 * @property $id
 * @property $nombre
 * @property $ape_pat
 * @property $ape_mat
 * @property $direccion
 * @property $email
 * @property $tel_casa
 * @property $tel_movil
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contacto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'ape_pat' => 'required',
		'ape_mat' => 'required',
		'direccion' => 'required',
		'email' => 'required',
		'tel_casa' => 'required',
		'tel_movil' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','ape_pat','ape_mat','direccion','email','tel_casa','tel_movil'];



}
