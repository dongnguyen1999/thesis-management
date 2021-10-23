<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Quyen
 * 
 * @property int $q_id
 * @property string|null $q_ma
 * @property string|null $q_ten
 * 
 * @property Collection|VaitroQuyen[] $vaitro_quyens
 *
 * @package App\Models
 */
class Quyen extends Model
{
	protected $table = 'quyen';
	protected $primaryKey = 'q_id';
	public $timestamps = false;

	protected $fillable = [
		'q_ma',
		'q_ten'
	];

	public function vaitro_quyens()
	{
		return $this->hasMany(VaitroQuyen::class, 'q_id');
	}
}
