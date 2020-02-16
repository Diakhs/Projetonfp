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
 * Class Matiere
 * 
 * @property int $id
 * @property string $libelle
 * @property string $coeficient
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Cour[] $cours
 *
 * @package App
 */
class Matiere extends Model
{
	use SoftDeletes;
	protected $table = 'matieres';

	protected $fillable = [
		'libelle',
		'coeficient'
	];

	public function cours()
	{
		return $this->hasMany(Cour::class, 'matieres_id');
	}
}
