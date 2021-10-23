<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DsDeTai
 * 
 * @property int $hknk_id
 * @property int $dt_id
 * 
 * @property HockyNienkhoa $hocky_nienkhoa
 * @property DeTai $de_tai
 *
 * @package App\Models
 */
class DsDeTai extends Model
{
	protected $table = 'ds_de_tai';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'hknk_id' => 'int',
		'dt_id' => 'int'
	];

	public function hocky_nienkhoa()
	{
		return $this->belongsTo(HockyNienkhoa::class, 'hknk_id');
	}

	public function de_tai()
	{
		return $this->belongsTo(DeTai::class, 'dt_id');
	}
}
