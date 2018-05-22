<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\MataPelajaran;
use App\TahunAjaran;
class Nilai extends Model
{
    public $incrementing = false;
    protected $fillable = ['uh1','uh2','uh3','uh4','uh5','uh6'];
    public function users(){
    	return $this->belongsTo('App\User','no_induk');
    }
    public function mata_pelajarans(){
    	return $this->belongsTo('App\MataPelajaran','id');
    }
    public function tahun_ajarans(){
    	return $this->belongsTo('App\TahunAjaran','id');
    }
}
