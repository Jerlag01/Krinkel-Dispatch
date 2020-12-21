<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 * 
 * @property int $id
 * @property string $name
 * @property string $lastname
 * @property string $email
 * @property string $address
 * @property string $picture-path
 * @property string $favorite_drink
 * @property string $state
 * @property int $hours_worked
 * 
 * @property Collection|Attendance[] $attendances
 * @property Collection|DriversLicense[] $drivers_licenses
 * @property Collection|FoodPreference[] $food_preferences
 * @property Collection|Skill[] $skills
 *
 * @package App\Models
 */
class Person extends Model
{
	protected $table = 'persons';
	public $timestamps = false;

	protected $casts = [
		'hours_worked' => 'int'
	];

	protected $fillable = [
		'name',
		'lastname',
		'email',
		'address',
		'picture-path',
		'favorite_drink',
		'state',
		'hours_worked'
	];

	public function attendances()
	{
		return $this->hasMany(Attendance::class);
	}

	public function drivers_licenses()
	{
		return $this->belongsToMany(DriversLicense::class, 'person_drivers_license');
	}

	public function food_preferences()
	{
		return $this->belongsToMany(FoodPreference::class, 'person_food_preference');
	}

	public function skills()
	{
		return $this->belongsToMany(Skill::class);
	}
}
