<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DriversLicense
 * 
 * @property int $id
 * @property string $category
 * @property string $description
 * 
 * @property Collection|Person[] $people
 *
 * @package App\Models
 */
class DriversLicense extends Model
{
	protected $table = 'drivers_licenses';
	public $timestamps = false;

	protected $fillable = [
		'category',
		'description'
	];

	public function people()
	{
		return $this->belongsToMany(Person::class, 'person_drivers_license');
	}
}
