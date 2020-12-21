<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonDriversLicense
 * 
 * @property int $person_id
 * @property int $drivers_license_id
 * 
 * @property DriversLicense $drivers_license
 * @property Person $person
 *
 * @package App\Models
 */
class PersonDriversLicense extends Model
{
	protected $table = 'person_drivers_license';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'person_id' => 'int',
		'drivers_license_id' => 'int'
	];

	public function drivers_license()
	{
		return $this->belongsTo(DriversLicense::class);
	}

	public function person()
	{
		return $this->belongsTo(Person::class);
	}
}
