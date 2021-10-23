<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LichRaHd
 * 
 * @property int $lrhd_id
 * @property int $p_id
 * @property Carbon|null $lrhd_thgianbatdau
 * @property Carbon|null $lrhd_thgianketthuc
 * 
 * @property PhongHoc $phong_hoc
 * @property Collection|HoiDong[] $hoi_dongs
 *
 * @package App\Models
 */
class LichRaHd extends Model
{
	protected $table = 'lich_ra_hd';
	protected $primaryKey = 'lrhd_id';
	public $timestamps = false;

	protected $casts = [
		'p_id' => 'int'
	];

	protected $dates = [
		'lrhd_thgianbatdau',
		'lrhd_thgianketthuc'
	];

	protected $fillable = [
		'p_id',
		'lrhd_thgianbatdau',
		'lrhd_thgianketthuc'
	];

	public function phong_hoc()
	{
		return $this->belongsTo(PhongHoc::class, 'p_id');
	}

	public function hoi_dongs()
	{
		return $this->hasMany(HoiDong::class, 'lrhd_id');
	}
}
