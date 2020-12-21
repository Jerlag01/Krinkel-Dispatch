<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonSkill
 * 
 * @property int $person_id
 * @property int $skill_id
 * 
 * @property Person $person
 * @property Skill $skill
 *
 * @package App\Models
 */
class PersonSkill extends Model
{
	protected $table = 'person_skill';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'person_id' => 'int',
		'skill_id' => 'int'
	];

	public function person()
	{
		return $this->belongsTo(Person::class);
	}

	public function skill()
	{
		return $this->belongsTo(Skill::class);
	}
}
