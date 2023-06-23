<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inventory
 *
 * @property $id
 * @property $restock_day
 * @property $elements_in_storage
 * @property $supervisor_name
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inventory extends Model
{
    
    static $rules = [
		'restock_day' => 'required',
		'elements_in_storage' => 'required',
		'supervisor_name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['restock_day','elements_in_storage','supervisor_name'];



}
