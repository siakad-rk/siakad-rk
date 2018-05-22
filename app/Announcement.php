<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Announcement extends Model
{
    protected $primaryKey = 'kodeP';
    public $incrementing = false;
    protected $fillable = ['title','description'];

    public function users(){
    	return $this->belongsTo('App\User','no_induk');
  	}
}
