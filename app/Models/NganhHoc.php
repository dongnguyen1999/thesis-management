<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NganhHoc
 * 
 * @property int $n_id
 * @property int $bm_id
 * @property string|null $n_ma
 * @property string|null $n_ten
 * 
 * @property BoMon $bo_mon
 * @property Collection|LopHoc[] $lop_hocs
 *
 * @package App\Models
 */
class NganhHoc extends Model
{
	protected $table = 'nganh_hoc';
	protected $primaryKey = 'n_id';
	public $timestamps = false;

	protected $casts = [
		'bm_id' => 'int'
	];

	protected $fillable = [
		'bm_id',
		'n_ma',
		'n_ten'
	];

	public function bo_mon()
	{
		return $this->belongsTo(BoMon::class, 'bm_id');
	}

	public function lop_hocs()
	{
		return $this->hasMany(LopHoc::class, 'n_id');
	}
}
