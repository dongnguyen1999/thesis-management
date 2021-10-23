<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QuydinhThoigian
 * 
 * @property int $ltg_id
 * @property int $hknk_id
 * @property Carbon|null $qdtg_thgianbatdau
 * @property Carbon|null $qdtg_thgianketthuc
 * 
 * @property HockyNienkhoa $hocky_nienkhoa
 * @property LoaiThoiGian $loai_thoi_gian
 *
 * @package App\Models
 */
class QuydinhThoigian extends Model
{
	protected $table = 'quydinh_thoigian';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ltg_id' => 'int',
		'hknk_id' => 'int'
	];

	protected $dates = [
		'qdtg_thgianbatdau',
		'qdtg_thgianketthuc'
	];

	protected $fillable = [
		'qdtg_thgianbatdau',
		'qdtg_thgianketthuc'
	];

	public function hocky_nienkhoa()
	{
		return $this->belongsTo(HockyNienkhoa::class, 'hknk_id');
	}

	public function loai_thoi_gian()
	{
		return $this->belongsTo(LoaiThoiGian::class, 'ltg_id');
	}
}
