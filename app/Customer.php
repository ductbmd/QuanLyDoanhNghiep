<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    const male=1;
    const female=2;
    
    public static $customer_sex=[self::male=>'Nam',self::female=>'Nữ'];
     protected $table = 'customer';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','birth','sex','CMND','SDT','Email'
    ];
}
