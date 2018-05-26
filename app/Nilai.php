<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\MataPelajaran;
use App\TahunAjaran;
class Nilai extends Model
{
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['1','2','3','4','5','6'];
    public function users(){
    	return $this->belongsTo('App\User','no_induk_siswa','no_induk');
    }
    public function mata_pelajarans(){
    	return $this->belongsTo('App\MataPelajaran','id_mapel');
    }
    public function tahun_ajarans(){
    	return $this->belongsTo('App\TahunAjaran', 'id_semester');
    }
}
