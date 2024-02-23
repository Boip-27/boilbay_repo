<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Dependencia extends Model
{
	use HasApiTokens, HasFactory, Notifiable;
	use HasRoles;

	protected $table = 'Dependencias';
	protected $primaryKey = 'id';
	protected $fillable =
	[
		'provincia',
		'parroquia',
		'num_distrito',
		'cod_distrito',
		'distrito',
		'num_circuito',
		'cod_circuito',
		'circuito',
		'num_subcircuito',
		'cod_subcircuito',
		'subcircuito',
		'user_id'
	];
	//protected $timestamps = false;
	public function user()
	{
		return $this->belongsTo('App\Models\User');
	}
}
