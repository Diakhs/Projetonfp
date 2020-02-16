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
 * Class Room
 * 
 * @property int $id
 * @property int $niveaus_id
 * @property string $matricule
 * @property string $codeclasse
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Niveau $niveau
 * @property Collection|Cour[] $cours
 * @property Collection|Inscription[] $inscriptions
 *
 * @package App
 */
class Room extends Model
{
	use SoftDeletes;
	protected $table = 'rooms';

	protected $casts = [
		'niveaus_id' => 'int'
	];

	protected $fillable = [
		'niveaus_id',
		'matricule',
		'codeclasse'
	];

	public function niveau()
	{
		return $this->belongsTo(Niveau::class, 'niveaus_id');
	}

	public function cours()
	{
		return $this->hasMany(Cour::class, 'rooms_id');
	}

	public function inscriptions()
	{
		return $this->hasMany(Inscription::class, 'rooms_id');
	}
}
