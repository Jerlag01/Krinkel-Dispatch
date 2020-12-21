<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Material
 * 
 * @property int $id
 * @property string $manufacturor
 * @property string $name
 * @property string $picture_path
 * @property string $owner_name
 * @property string $serial_number
 * @property string $tool_kind
 * 
 * @property Collection|MaterialLoan[] $material_loans
 *
 * @package App\Models
 */
class Material extends Model
{
	protected $table = 'materials';
	public $timestamps = false;

	protected $fillable = [
		'manufacturor',
		'name',
		'picture_path',
		'owner_name',
		'serial_number',
		'tool_kind'
	];

	public function material_loans()
	{
		return $this->hasMany(MaterialLoan::class);
	}
}
