<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Attendance
 * 
 * @property int $id
 * @property int $person_id
 * @property Carbon $start_time
 * @property Carbon $end_time
 * 
 * @property Person $person
 *
 * @package App\Models
 */
class Attendance extends Model
{
	protected $table = 'attendance';
	public $timestamps = false;

	protected $casts = [
		'person_id' => 'int'
	];

	protected $dates = [
		'start_time',
		'end_time'
	];

	protected $fillable = [
		'person_id',
		'start_time',
		'end_time'
	];

	public function person()
	{
		return $this->belongsTo(Person::class);
	}
}
