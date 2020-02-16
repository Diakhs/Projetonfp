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
 * Class Ecolier
 * 
 * @property int $id
 * @property int $users_id
 * @property string $matricule
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 * @property Collection|Inscription[] $inscriptions
 *
 * @package App
 */
class Ecolier extends Model
{
	use SoftDeletes;
	protected $table = 'ecoliers';

	protected $casts = [
		'users_id' => 'int'
	];

	protected $fillable = [
		'users_id',
		'matricule'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}

	public function inscriptions()
	{
		return $this->hasMany(Inscription::class, 'ecoliers_id');
	}
}
