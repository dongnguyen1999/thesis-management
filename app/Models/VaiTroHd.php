<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VaiTroHd
 * 
 * @property int $vthd_id
 * @property string|null $vthd_ma
 * @property string|null $vthd_ten
 * 
 * @property Collection|HoiDong[] $hoi_dongs
 *
 * @package App\Models
 */
class VaiTroHd extends Model
{
	protected $table = 'vai_tro_hd';
	protected $primaryKey = 'vthd_id';
	public $timestamps = false;

	protected $fillable = [
		'vthd_ma',
		'vthd_ten'
	];

	public function hoi_dongs()
	{
		return $this->hasMany(HoiDong::class, 'vthd_id');
	}
}
