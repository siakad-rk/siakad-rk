<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $primaryKey = 'no_induk';
    protected $fillable = ['pelajaran'];
}
