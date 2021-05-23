<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    //
    use SoftDeletes;

    protected $table = 'guru';
    protected $dates = ['delete_at']; 
    protected $fillable = ['guru_nama', 'guru_mata-pelajaran'];
}
