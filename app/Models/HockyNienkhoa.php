<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HockyNienkhoa
 * 
 * @property int $hknk_id
 * @property string|null $hknk_ma
 * @property string|null $hknk_ten
 * @property Carbon|null $hknk_batdau
 * @property Carbon|null $hknk_ketthuc
 * 
 * @property Collection|DkDeTai[] $dk_de_tais
 * @property Collection|DkGiangvien[] $dk_giangviens
 * @property Collection|DsDeTai[] $ds_de_tais
 * @property Collection|QuydinhThoigian[] $quydinh_thoigians
 *
 * @package App\Models
 */
class HockyNienkhoa extends Model
{
	protected $table = 'hocky_nienkhoa';
	protected $primaryKey = 'hknk_id';
	public $timestamps = false;

	protected $fillable = [
		'hknk_ma',
		'hknk_ten',
		'hknk_batdau',
		'hknk_ketthuc',
	];

	public function dk_de_tais()
	{
		return $this->hasMany(DkDeTai::class, 'hknk_id');
	}

	public function dk_giangviens()
	{
		return $this->hasMany(DkGiangvien::class, 'hknk_id');
	}

	public function ds_de_tais()
	{
		return $this->hasMany(DsDeTai::class, 'hknk_id');
	}

	public function quydinh_thoigians()
	{
		return $this->hasMany(QuydinhThoigian::class, 'hknk_id');
	}
}
