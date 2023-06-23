<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Piece
 *
 * @property $id
 * @property $filters
 * @property $light_bulls
 * @property $straps
 * @property $oil
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Piece extends Model
{
    
    static $rules = [
		'filters' => 'required',
		'light_bulls' => 'required',
		'straps' => 'required',
		'oil' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['filters','light_bulls','straps','oil'];



}
