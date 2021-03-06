<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public $incrementing = false;
    public $timestamps = false;
    
    protected $table ='users';
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
    public function ekskul()
    {
        return $this->belongsTo('App\Ekskul');
    }
    public function announcements(){
        return $this->hasMany('App\Announcement');
    }
    public function nilais(){
        return $this->hasMany('App\Nilai','no_induk', 'no_induk_siswa');
    }
    public function menghuni_kelas(){
        return $this->hasOne('App\MenghuniKelas','no_induk');
    }
}
