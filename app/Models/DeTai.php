<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DeTai
 *
 * @property int $dt_id
 * @property int $nd_radt_id
 * @property string|null $dt_ma
 * @property string|null $dt_ten
 * @property string|null $dt_mota
 *
 * @property NguoiDung $nguoi_dung
 * @property Collection|DkDeTai[] $dk_de_tais
 * @property Collection|DsDeTai[] $ds_de_tais
 *
 * @package App\Models
 */
class DeTai extends Model
{
	protected $table = 'de_tai';
	protected $primaryKey = 'dt_id';
	public $timestamps = false;

	protected $casts = [
		'nd_radt_id' => 'int'
	];

	protected $fillable = [
		'nd_radt_id',
		'dt_ma',
		'dt_ten',
		'dt_mota'
	];

	public function nguoi_ra_de_tai() //renamed
	{
		return $this->belongsTo(NguoiDung::class, 'nd_radt_id');
	}

	public function dk_de_tais()
	{
		return $this->hasMany(DkDeTai::class, 'dt_id');
	}

	public function ds_de_tais()
	{
		return $this->hasMany(DsDeTai::class, 'dt_id');
	}
}
