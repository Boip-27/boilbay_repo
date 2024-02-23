<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Transporte extends Model
{
	use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

	protected $table = 'transportes';
	protected $primaryKey = 'id';
	protected $fillable =
	[
		'tipo',
		'marca',
		'modelo',
		'placa',
		'chasis',
		'motor',
		'kilometraje',
		'cilindraje',
		'carga',
		'pasajeros'
	];
	

	public function user(){
		return $this->belongsTo('App\Models\User');
	}

	public function mantenimiento(){
		return $this->belongsTo('App\Models\Admin\Mantenimiento');
	}

}
