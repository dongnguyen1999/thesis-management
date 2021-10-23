<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class KhoaHoc
 * 
 * @property int $kh_id
 * @property string|null $kh_ma
 * @property string|null $kh_ten
 * @property Carbon|null $kh_nam
 * 
 * @property Collection|LopHoc[] $lop_hocs
 *
 * @package App\Models
 */
class KhoaHoc extends Model
{
	protected $table = 'khoa_hoc';
	protected $primaryKey = 'kh_id';
	public $timestamps = false;

	protected $dates = [
		'kh_nam'
	];

	protected $fillable = [
		'kh_ma',
		'kh_ten',
		'kh_nam'
	];

	public function lop_hocs()
	{
		return $this->hasMany(LopHoc::class, 'kh_id');
	}
}
