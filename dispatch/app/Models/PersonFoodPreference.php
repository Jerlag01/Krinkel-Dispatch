<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonFoodPreference
 * 
 * @property int $person_id
 * @property int $food_preference_id
 * 
 * @property FoodPreference $food_preference
 * @property Person $person
 *
 * @package App\Models
 */
class PersonFoodPreference extends Model
{
	protected $table = 'person_food_preference';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'person_id' => 'int',
		'food_preference_id' => 'int'
	];

	public function food_preference()
	{
		return $this->belongsTo(FoodPreference::class);
	}

	public function person()
	{
		return $this->belongsTo(Person::class);
	}
}
