<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistica extends Model
{
    use HasFactory;
    protected $table = 'logisticas';
    protected $fillable =
    [
        'nombre',
        'created_at',
        'categoria',
        'cantidad'
    ];
    
}
