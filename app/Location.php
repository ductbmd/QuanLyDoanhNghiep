<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','staff_id','department_id'
    ];
    public function staff()
    {
    	return $this->hasOne(Staff::class,'id','staff_id');
    }
    public function department()
    {
    	return $this->hasOne(Department::class,'id','department_id');
    }
}
