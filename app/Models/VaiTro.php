<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VaiTro
 * 
 * @property int $vt_id
 * @property string|null $vt_ma
 * @property string|null $vt_ten
 * 
 * @property Collection|NguoiDung[] $nguoi_dungs
 * @property Collection|VaitroQuyen[] $vaitro_quyens
 *
 * @package App\Models
 */
class VaiTro extends Model
{
	protected $table = 'vai_tro';
	protected $primaryKey = 'vt_id';
	public $timestamps = false;

	protected $fillable = [
		'vt_ma',
		'vt_ten'
	];

	public function nguoi_dungs()
	{
		return $this->hasMany(NguoiDung::class, 'vt_id');
	}

	public function vaitro_quyens()
	{
		return $this->hasMany(VaitroQuyen::class, 'vt_id');
	}
}
