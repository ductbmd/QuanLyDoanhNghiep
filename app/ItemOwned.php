<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemOwned extends Model
{
    protected $table = 'item_owned';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id','staff_id','department_id','position'
    ];
    //relationship
    public function item()
    {
    	return $this->hasOne(ItemDetail::class,'id','item_id');
    }
    public function staff()
    {
    	return $this->hasOne(Staff::class,'id','staff_id');
    }
    public function department()
    {
    	return $this->hasOne(Department::class,'id','department_id');
    }
}
