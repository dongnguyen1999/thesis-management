<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PhongHoc
 * 
 * @property int $p_id
 * @property string|null $p_ma
 * @property string|null $p_ten
 * @property string|null $p_succhua
 * 
 * @property Collection|LichRaHd[] $lich_ra_hds
 *
 * @package App\Models
 */
class PhongHoc extends Model
{
	protected $table = 'phong_hoc';
	protected $primaryKey = 'p_id';
	public $timestamps = false;

	protected $fillable = [
		'p_ma',
		'p_ten',
		'p_succhua'
	];

	public function lich_ra_hds()
	{
		return $this->hasMany(LichRaHd::class, 'p_id');
	}
}
