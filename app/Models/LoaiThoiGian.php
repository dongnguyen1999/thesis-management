<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LoaiThoiGian
 * 
 * @property int $ltg_id
 * @property string|null $ltg_ma
 * @property string|null $ltg_ten
 * 
 * @property Collection|QuydinhThoigian[] $quydinh_thoigians
 *
 * @package App\Models
 */
class LoaiThoiGian extends Model
{
	protected $table = 'loai_thoi_gian';
	protected $primaryKey = 'ltg_id';
	public $timestamps = false;

	protected $fillable = [
		'ltg_ma',
		'ltg_ten'
	];

	public function quydinh_thoigians()
	{
		return $this->hasMany(QuydinhThoigian::class, 'ltg_id');
	}
}
