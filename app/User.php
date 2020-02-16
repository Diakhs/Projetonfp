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
 * Class User
 * 
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property string $age
 * @property string $numero
 * @property string $role
 * @property string $adresse
 * @property string $telephone
 * @property string $email
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Administrateur[] $administrateurs
 * @property Collection|Ecolier[] $ecoliers
 * @property Collection|Professeur[] $professeurs
 *
 * @package App
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $fillable = [
		'nom',
		'prenom',
		'age',
		'numero',
		'role',
		'adresse',
		'telephone',
		'email'
	];

	public function administrateurs()
	{
		return $this->hasMany(Administrateur::class, 'users_id');
	}

	public function ecoliers()
	{
		return $this->hasMany(Ecolier::class, 'users_id');
	}

	public function professeurs()
	{
		return $this->hasMany(Professeur::class, 'users_id');
	}
}
