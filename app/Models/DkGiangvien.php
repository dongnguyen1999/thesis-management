<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DkGiangvien
 *
 * @property int $nd_sv_id
 * @property int $nd_gv_id
 * @property int $hknk_id
 * @property Carbon|null $dkgv_thgiandk
 *
 * @property HockyNienkhoa $hocky_nienkhoa
 * @property NguoiDung $nguoi_dung
 *
 * @package App\Models
 */
class DkGiangvien extends Model
{
	protected $table = 'dk_giangvien';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'nd_sv_id' => 'int',
		'nd_gv_id' => 'int',
		'hknk_id' => 'int'
	];

	protected $dates = [
		'dkgv_thgiandk'
	];

	protected $fillable = [
		'dkgv_thgiandk'
	];

	public function hocky_nienkhoa()
	{
		return $this->belongsTo(HockyNienkhoa::class, 'hknk_id');
	}

	public function gv_huong_dan() // renamed
	{
		return $this->belongsTo(NguoiDung::class, 'nd_gv_id');
	}

    public function sv_dang_ky() // mod added
	{
		return $this->belongsTo(NguoiDung::class, 'nd_sv_id');
	}
}
