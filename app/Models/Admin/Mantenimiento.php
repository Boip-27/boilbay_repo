<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Mantenimiento extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;
    
    protected $table = 'mantenimientos';
    protected $primaryKey= 'id';
    protected $fillable =
    [
        'user_id',
        'transporte_id',
        'tipo',
        'fecha',
        'observacion'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User','id','user_id');
    }
    
    public function transporte()
    {
        return $this->hasOne('App\Models\Admin\Transporte','id', 'transporte_id');
    }
}
