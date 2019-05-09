<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostDo extends Model
{
    protected $table = 'post_do';
    use SoftDeletes;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $dates = ['deleted_at'];
    protected $fillable = [
        'item_id','localtion','staff_id','file_id','description','create_at','update_at'
    ];
    public function staff()
    {
    	return $this->hasOne(Staff::class, 'id', 'staff_id');
    }
    public function item()
    {
        return $this->hasOne(ItemDetail::class,'id','item_id');
    }
    public function file()
    {
        return $this->hasOne(File::class,'id','file_id');
    }
    
}
