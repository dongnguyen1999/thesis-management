<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BoMon
 * 
 * @property int $bm_id
 * @property string|null $bm_ma
 * @property string|null $bm_ten
 * 
 * @property Collection|NganhHoc[] $nganh_hocs
 * @property Collection|NguoiDung[] $nguoi_dungs
 *
 * @package App\Models
 */
class BoMon extends Model
{
	protected $table = 'bo_mon';
	protected $primaryKey = 'bm_id';
	public $timestamps = false;

	protected $fillable = [
		'bm_ma',
		'bm_ten'
	];

	public function nganh_hocs()
	{
		return $this->hasMany(NganhHoc::class, 'bm_id');
	}

	public function nguoi_dungs()
	{
		return $this->hasMany(NguoiDung::class, 'bm_id');
	}
}
