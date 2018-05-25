<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = 'nama_kelas';
    protected $fillable = ['jenjang','alfabet','penjurusan'];

    public function menghuni_kelas(){
        return $this->hasMany('App\MenghuniKelas','no_induk');
    }
}
