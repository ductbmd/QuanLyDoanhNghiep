<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Staff extends Model
{
    const nam=1;
    const nu=2;
    const nhanvien=1;
    const quanly=2;
    const phophong=3;
    const truongphong=4;
    const phogiamdoc=5;
    const giamdoc=6;
    
    public static $staff_sex=[self::nam=>'Nam',self::nu=>'Nữ'];
    public static $staff_position=[self::nhanvien=>'Nhân viên',self::quanly=>'Quản lý',self::phophong=>'Phó phòng',self::truongphong=>'Trưởng phòng',
    self::phogiamdoc=>'Phó giám đốc',self::giamdoc=>'Giám đốc'];
     protected $table = 'staff';
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','birth','sex','CMND','SDT','file_id','Email','id_department','position'
    ];
    public function department()
    {
        return $this->hasOne(Department::class, 'id', 'id_department');
    }
    public function file()
    {
        return $this->hasOne(File::class, 'id', 'file_id');
    }
}
