<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Inscription
 * 
 * @property int $id
 * @property Carbon $anneescolaire
 * @property int $ecoliers_id
 * @property int $rooms_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Ecolier $ecolier
 * @property Room $room
 *
 * @package App
 */
class Inscription extends Model
{
	use SoftDeletes;
	protected $table = 'inscriptions';

	protected $casts = [
		'ecoliers_id' => 'int',
		'rooms_id' => 'int'
	];

	protected $dates = [
		'anneescolaire'
	];

	protected $fillable = [
		'anneescolaire',
		'ecoliers_id',
		'rooms_id'
	];

	public function ecolier()
	{
		return $this->belongsTo(Ecolier::class, 'ecoliers_id');
	}

	public function room()
	{
		return $this->belongsTo(Room::class, 'rooms_id');
	}
}
