<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemDetail extends Model
{
    protected $table = 'item_detail';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id','description'
    ];
    public function itemgoc()
    {
    	return $this->hasOne(Item::class,'id','item_id');
    }
    public function itemown()
    {
        return $this->hasOne(ItemOwned::class,'item_id','id');
    }
}
