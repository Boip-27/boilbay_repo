<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dotacion extends Model
{
    use HasFactory;
    protected $table = 'Dotacions';
	protected $primaryKey = 'id';
	protected $fillable =
	[
		'user_id',
		'pertrecho_id',
	];
}
