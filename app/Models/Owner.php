<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Owner
 *
 * @property $id
 * @property $name
 * @property $cellphone
 * @property $age
 * @property $gender
 * @property $id_mechanical_workshop
 * @property $created_at
 * @property $updated_at
 *
 * @property MechanicalWorkshop $mechanicalWorkshop
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Owner extends Model
{
    
    static $rules = [
		'name' => 'required',
		'cellphone' => 'required',
		'age' => 'required',
		'gender' => 'required',
		'id_mechanical_workshop' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','cellphone','age','gender','id_mechanical_workshop'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mechanicalWorkshop()
    {
        return $this->hasOne('App\Models\MechanicalWorkshop', 'id', 'id_mechanical_workshop');
    }
    

}
