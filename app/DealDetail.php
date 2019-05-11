<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DealDetail extends Model
{
    //Chi tiet hoa don
    protected $table = 'deal_detail';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'deal_id','item_id','quantity'
    ];
    public function deal()
    {
    	return $this->hasOne(Deal::class,'id','deal_id');
    }
    public function item()
    {
        return $this->hasOne(ItemDetail::class,'id','item_id');
    }
}
