<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NguoiDung
 * 
 * @property int $nd_id
 * @property int $vt_id
 * @property int|null $td_id
 * @property int|null $bm_id
 * @property int|null $l_id
 * @property string|null $nd_ma
 * @property string|null $nd_ten
 * @property Carbon|null $nd_ngaysinh
 * @property string|null $nd_gioitinh
 * @property string|null $nd_sdt
 * @property string|null $nd_email
 * @property string|null $nd_tentk
 * @property string|null $nd_password
 * 
 * @property VaiTro $vai_tro
 * @property TrinhDo|null $trinh_do
 * @property BoMon|null $bo_mon
 * @property LopHoc|null $lop_hoc
 * @property Collection|DeTai[] $de_tais
 * @property Collection|DkDeTai[] $dk_de_tais
 * @property Collection|DkGiangvien[] $dk_giangviens
 * @property Collection|HoiDong[] $hoi_dongs
 *
 * @package App\Models
 */
class NguoiDung extends Model
{
	protected $table = 'nguoi_dung';
	protected $primaryKey = 'nd_id';
	public $timestamps = false;

	protected $casts = [
		'vt_id' => 'int',
		'td_id' => 'int',
		'bm_id' => 'int',
		'l_id' => 'int'
	];

	protected $dates = [
		'nd_ngaysinh'
	];

	protected $hidden = [
		'nd_password'
	];

	protected $fillable = [
		'vt_id',
		'td_id',
		'bm_id',
		'l_id',
		'nd_ma',
		'nd_ten',
		'nd_ngaysinh',
		'nd_gioitinh',
		'nd_sdt',
		'nd_email',
		'nd_tentk',
		'nd_password'
	];

	public function vai_tro()
	{
		return $this->belongsTo(VaiTro::class, 'vt_id');
	}

	public function trinh_do()
	{
		return $this->belongsTo(TrinhDo::class, 'td_id');
	}

	public function bo_mon()
	{
		return $this->belongsTo(BoMon::class, 'bm_id');
	}

	public function lop_hoc()
	{
		return $this->belongsTo(LopHoc::class, 'l_id');
	}

	public function de_tais()
	{
		return $this->hasMany(DeTai::class, 'nd_radt_id');
	}

	public function dk_de_tais()
	{
		return $this->hasMany(DkDeTai::class, 'nd_dkdt_id');
	}

	public function dk_giangviens()
	{
		return $this->hasMany(DkGiangvien::class, 'nd_gv_id');
	}

	public function hoi_dongs()
	{
		return $this->hasMany(HoiDong::class, 'nd_ngoihd_id');
	}
}
