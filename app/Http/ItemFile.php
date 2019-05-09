<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemFile extends Model
{
    protected $table = 'item_file';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id','file_id','description'
    ];
    
    public function file()
    {
    	return $this->hasOne(File::class,'id','file_id');
    }

}
