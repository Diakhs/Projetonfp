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
 * Class Niveau
 * 
 * @property int $id
 * @property string $libelle
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Room[] $rooms
 *
 * @package App
 */
class Niveau extends Model
{
	use SoftDeletes;
	protected $table = 'niveaus';

	protected $fillable = [
		'libelle'
	];

	public function rooms()
	{
		return $this->hasMany(Room::class, 'niveaus_id');
	}
}
