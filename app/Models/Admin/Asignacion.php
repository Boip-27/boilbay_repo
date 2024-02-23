<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;

    protected $table = 'Asignacions';
	protected $primaryKey = 'id';
	protected $fillable =
	[
		'id',
		'user_id',
        'dependencia_id',
        'transporte_id',
	];

}
