<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tool
 *
 * @property $id
 * @property $keys
 * @property $pliers
 * @property $screwdriver
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tool extends Model
{
    
    static $rules = [
		'keys' => 'required',
		'pliers' => 'required',
		'screwdriver' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['keys','pliers','screwdriver'];



}
