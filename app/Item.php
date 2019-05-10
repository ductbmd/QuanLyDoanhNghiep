<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	public static $item_unit=[1=>'Chiếc',2=>'Kg'];
	public static $item_type=[1=>'Dụng cụ',2=>'Nguyên liệu',3=>'Sản phẩm'];

    protected $table = 'item';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','unit','quantity','quality','price','type'
    ];
    public function file()
    {
        return $this->hasOne(ItemFile::class,'item_id','id');
    }

}
