<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LopHoc
 * 
 * @property int $l_id
 * @property int $n_id
 * @property int $kh_id
 * @property string|null $l_ma
 * @property string|null $l_ten
 * 
 * @property KhoaHoc $khoa_hoc
 * @property NganhHoc $nganh_hoc
 * @property Collection|NguoiDung[] $nguoi_dungs
 *
 * @package App\Models
 */
class LopHoc extends Model
{
	protected $table = 'lop_hoc';
	protected $primaryKey = 'l_id';
	public $timestamps = false;

	protected $casts = [
		'n_id' => 'int',
		'kh_id' => 'int'
	];

	protected $fillable = [
		'n_id',
		'kh_id',
		'l_ma',
		'l_ten'
	];

	public function khoa_hoc()
	{
		return $this->belongsTo(KhoaHoc::class, 'kh_id');
	}

	public function nganh_hoc()
	{
		return $this->belongsTo(NganhHoc::class, 'n_id');
	}

	public function nguoi_dungs()
	{
		return $this->hasMany(NguoiDung::class, 'l_id');
	}
}
