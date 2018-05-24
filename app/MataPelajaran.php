<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['pelajaran'];
    public function nilais(){
        return $this->hasMany('App\Nilai', 'id_mapel');
    }
}
