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
 * Class Professeur
 * 
 * @property int $id
 * @property string $matricule
 * @property int $users_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 * @property Collection|Cour[] $cours
 *
 * @package App
 */
class Professeur extends Model
{
	use SoftDeletes;
	protected $table = 'professeurs';

	protected $casts = [
		'users_id' => 'int'
	];

	protected $fillable = [
		'matricule',
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}

	public function cours()
	{
		return $this->hasMany(Cour::class, 'professeurs_id');
	}
}
