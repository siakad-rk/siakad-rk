<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenghuniKelas extends Model
{
    public $incrementing = false;
    public $timestamps = false;


    public function users(){
    	return $this->belongsTo('App\User','no_induk');
  	}

  	public function kelas(){
    	return $this->belongsTo('App\Kelas','nama_kelas');
  	}
}
