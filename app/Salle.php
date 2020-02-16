<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Salle
 * 
 * @property int $id
 * @property int $numero
 * @property string $intitule
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Cour[] $cours
 *
 * @package App
 */
class Salle extends Model
{
	use SoftDeletes;
	protected $table = 'salles';

	protected $casts = [
		'numero' => 'int'
	];

	protected $fillable = [
		'numero',
		'intitule'
	];

	public function cours()
	{
		return $this->hasMany(Cour::class, 'salles_id');
	}
}
