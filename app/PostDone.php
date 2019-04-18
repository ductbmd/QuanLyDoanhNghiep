<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostDone extends Model
{
    protected $table = 'post_done';
    use SoftDeletes;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $dates = ['deleted_at'];
    protected $fillable = [
        'post_do_id','staff_id','file_id','description','create_at','update_at'
    ];
    public function postDo()
    {
    	return $this->hasOne(PostDo::class, 'id', 'postdo_id');
    }
    public function staff()
    {
        return $this->hasOne(Staff::class, 'id', 'staff_id');
    }
    public function file()
    {
        return $this->hasOne(File::class,'id','file_id');
    }
}
