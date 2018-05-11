<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
class User extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'no_induk';
    protected $fillable = [
        'name', 'no_induk', 'password','roles'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles(){
      return $this->hasOne('App\Role', 'foreign_key');
    }
}
