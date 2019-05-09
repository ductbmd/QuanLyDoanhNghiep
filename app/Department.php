<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	const Business=1;//Phong kinh doanh(phu trach doanh thu)
	const Technical=2;//Phong ky thuat phu trach item
	public static $Department_type=[self::Business=>'Kinh doanh',self::Technical=>'Kỹ thuật'];
    //Phong ban
     protected $table = 'department';
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','type'
    ];
}
