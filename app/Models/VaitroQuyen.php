<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VaitroQuyen
 * 
 * @property int $q_id
 * @property int $vt_id
 * 
 * @property Quyen $quyen
 * @property VaiTro $vai_tro
 *
 * @package App\Models
 */
class VaitroQuyen extends Model
{
	protected $table = 'vaitro_quyen';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'q_id' => 'int',
		'vt_id' => 'int'
	];

	public function quyen()
	{
		return $this->belongsTo(Quyen::class, 'q_id');
	}

	public function vai_tro()
	{
		return $this->belongsTo(VaiTro::class, 'vt_id');
	}
}
