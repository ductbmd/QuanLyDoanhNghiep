<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Warehouse extends Model
{
    protected $table = 'warehouse';
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','location','status','max'
    ];
}
