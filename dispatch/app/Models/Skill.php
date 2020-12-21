<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Skill
 * 
 * @property int $id
 * @property string $icon
 * @property string $name
 * @property string $description
 * 
 * @property Collection|Person[] $people
 *
 * @package App\Models
 */
class Skill extends Model
{
	protected $table = 'skills';
	public $timestamps = false;

	protected $fillable = [
		'icon',
		'name',
		'description'
	];

	public function people()
	{
		return $this->belongsToMany(Person::class);
	}
}
