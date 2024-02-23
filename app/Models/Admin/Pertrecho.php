<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertrecho extends Model
{
    use HasFactory;
    protected $table = 'Pertrechos';
	protected $primaryKey = 'id';
	protected $fillable =
	[
		'tipo_arma',
		'nombre',
		'descripcion',
		'codigo'
	];
}
