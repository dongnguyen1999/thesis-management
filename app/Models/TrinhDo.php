<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TrinhDo
 * 
 * @property int $td_id
 * @property string|null $td_ma
 * @property string|null $td_ten
 * @property string|null $td_tenviettat
 * 
 * @property Collection|NguoiDung[] $nguoi_dungs
 *
 * @package App\Models
 */
class TrinhDo extends Model
{
	protected $table = 'trinh_do';
	protected $primaryKey = 'td_id';
	public $timestamps = false;

	protected $fillable = [
		'td_ma',
		'td_ten',
		'td_tenviettat'
	];

	public function nguoi_dungs()
	{
		return $this->hasMany(NguoiDung::class, 'td_id');
	}
}
