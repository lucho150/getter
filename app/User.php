<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Rol;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    
    use Notifiable;

  
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'rol_id'
    ];

  
    protected $hidden = [
        'password', 'remember_token', 'api_token'
    ];

 
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public static function apiToken()
    {
        return Str::random(40);
    }
  
    public function rol(){
        return $this->belongsTo(Rol::class, 'rol_id');
    }
}
