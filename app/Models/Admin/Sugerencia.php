<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Sugerencia extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    protected $fillable =
    [
        'circuito',
        'subcircuito',
        'tipo',
        'detalle',
        'apellidos',
        'nombres',
        'telefono'
    ];
}
