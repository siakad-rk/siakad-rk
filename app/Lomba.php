<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['nama', 'tanggal', 'lokasi'];
}
