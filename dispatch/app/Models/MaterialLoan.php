<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MaterialLoan
 * 
 * @property int $id
 * @property int $material_id
 * @property string $loaner_name
 * @property string $loander_surname
 * @property string $verbond
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property string $location
 * @property string $phone_number
 * @property string $loanable_to
 * 
 * @property Material $material
 *
 * @package App\Models
 */
class MaterialLoan extends Model
{
	protected $table = 'material_loans';
	public $timestamps = false;

	protected $casts = [
		'material_id' => 'int'
	];

	protected $dates = [
		'start_time',
		'end_time'
	];

	protected $fillable = [
		'material_id',
		'loaner_name',
		'loander_surname',
		'verbond',
		'start_time',
		'end_time',
		'location',
		'phone_number',
		'loanable_to'
	];

	public function material()
	{
		return $this->belongsTo(Material::class);
	}
}
