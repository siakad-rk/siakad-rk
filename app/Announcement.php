<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Announcement extends Model
{
    protected $primaryKey = 'kode';
    protected $fillable = ['title','description'];
    public function users(){
    	return $this->belongsTo('App\User','foreign_key','no_induk');
  	}
}
