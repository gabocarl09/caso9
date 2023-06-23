<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MechanicalWorkshop
 *
 * @property $id
 * @property $direction
 * @property $opening_time
 * @property $closing_time
 * @property $created_at
 * @property $updated_at
 *
 * @property Owner[] $owners
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MechanicalWorkshop extends Model
{
    
    static $rules = [
		'direction' => 'required',
		'opening_time' => 'required',
		'closing_time' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['direction','opening_time','closing_time'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function owners()
    {
        return $this->hasMany('App\Models\Owner', 'id_mechanical_workshop', 'id');
    }
    

}
