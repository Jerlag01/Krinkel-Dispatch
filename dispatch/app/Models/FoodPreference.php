<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FoodPreference
 * 
 * @property int $id
 * @property string $description
 * 
 * @property Collection|Person[] $people
 *
 * @package App\Models
 */
class FoodPreference extends Model
{
	protected $table = 'food_preferences';
	public $timestamps = false;

	protected $fillable = [
		'description'
	];

	public function people()
	{
		return $this->belongsToMany(Person::class, 'person_food_preference');
	}
}
