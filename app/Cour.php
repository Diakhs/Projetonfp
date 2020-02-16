<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cour
 * 
 * @property int $id
 * @property int $salles_id
 * @property int $matieres_id
 * @property int $administrateurs_id
 * @property int $rooms_id
 * @property int $professeurs_id
 * @property string $jour
 * @property Carbon $heuredebut
 * @property Carbon $heurefin
 * @property string $semestre
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Administrateur $administrateur
 * @property Matiere $matiere
 * @property Professeur $professeur
 * @property Room $room
 * @property Salle $salle
 *
 * @package App
 */
class Cour extends Model
{
	use SoftDeletes;
	protected $table = 'cours';

	protected $casts = [
		'salles_id' => 'int',
		'matieres_id' => 'int',
		'administrateurs_id' => 'int',
		'rooms_id' => 'int',
		'professeurs_id' => 'int'
	];

	protected $dates = [
		'heuredebut',
		'heurefin'
	];

	protected $fillable = [
		'salles_id',
		'matieres_id',
		'administrateurs_id',
		'rooms_id',
		'professeurs_id',
		'jour',
		'heuredebut',
		'heurefin',
		'semestre'
	];

	public function administrateur()
	{
		return $this->belongsTo(Administrateur::class, 'administrateurs_id');
	}

	public function matiere()
	{
		return $this->belongsTo(Matiere::class, 'matieres_id');
	}

	public function professeur()
	{
		return $this->belongsTo(Professeur::class, 'professeurs_id');
	}

	public function room()
	{
		return $this->belongsTo(Room::class, 'rooms_id');
	}

	public function salle()
	{
		return $this->belongsTo(Salle::class, 'salles_id');
	}
}
