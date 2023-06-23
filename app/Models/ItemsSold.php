<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ItemsSold
 *
 * @property $id
 * @property $name
 * @property $type
 * @property $amount
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ItemsSold extends Model
{
    
    static $rules = [
		'name' => 'required',
		'type' => 'required',
		'amount' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type','amount'];



}
