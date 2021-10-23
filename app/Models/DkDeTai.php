<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DkDeTai
 *
 * @property int $dkdt_id
 * @property int $nd_dkdt_id
 * @property int $dt_id
 * @property int $hknk_id
 * @property Carbon|null $dkdt_thgiandk
 * @property float|null $dkdt_tongdiem
 *
 * @property DeTai $de_tai
 * @property HockyNienkhoa $hocky_nienkhoa
 * @property NguoiDung $nguoi_dung
 * @property Collection|HoiDong[] $hoi_dongs
 *
 * @package App\Models
 */
class DkDeTai extends Model
{
	protected $table = 'dk_de_tai';
	protected $primaryKey = 'dkdt_id';
	public $timestamps = false;

	protected $casts = [
		'nd_dkdt_id' => 'int',
		'dt_id' => 'int',
		'hknk_id' => 'int',
		'dkdt_tongdiem' => 'float'
	];

	protected $dates = [
		'dkdt_thgiandk'
	];

	protected $fillable = [
		'nd_dkdt_id',
		'dt_id',
		'hknk_id',
		'dkdt_thgiandk',
		'dkdt_tongdiem'
	];

	public function de_tai()
	{
		return $this->belongsTo(DeTai::class, 'dt_id');
	}

	public function hocky_nienkhoa()
	{
		return $this->belongsTo(HockyNienkhoa::class, 'hknk_id');
	}

	public function nguoi_dkdt() // renamed
	{
		return $this->belongsTo(NguoiDung::class, 'nd_dkdt_id');
	}

	public function hoi_dongs()
	{
		return $this->hasMany(HoiDong::class, 'dkdt_id');
	}
}
