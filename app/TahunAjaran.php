<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['tahun_ajaran','semester'];
    public function nilais(){
        return $this->hasMany('App\Nilai', 'id_semester');
    }
}
