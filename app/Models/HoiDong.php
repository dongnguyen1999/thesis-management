<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HoiDong
 *
 * @property int $vthd_id
 * @property int $nd_ngoihd_id
 * @property int $dkdt_id
 * @property int|null $lrhd_id
 * @property float|null $hd_diem
 *
 * @property DkDeTai $dk_de_tai
 * @property VaiTroHd $vai_tro_hd
 * @property LichRaHd|null $lich_ra_hd
 * @property NguoiDung $nguoi_dung
 *
 * @package App\Models
 */
class HoiDong extends Model
{
	protected $table = 'hoi_dong';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'vthd_id' => 'int',
		'nd_ngoihd_id' => 'int',
		'dkdt_id' => 'int',
		'lrhd_id' => 'int',
		'hd_diem' => 'float'
	];

	protected $fillable = [
		'lrhd_id',
		'hd_diem'
	];

	public function dk_de_tai()
	{
		return $this->belongsTo(DkDeTai::class, 'dkdt_id');
	}

	public function vai_tro_hd()
	{
		return $this->belongsTo(VaiTroHd::class, 'vthd_id');
	}

	public function lich_ra_hd()
	{
		return $this->belongsTo(LichRaHd::class, 'lrhd_id');
	}

	public function nguoi_ngoi_hd() // renamed
	{
		return $this->belongsTo(NguoiDung::class, 'nd_ngoihd_id');
	}
}
