<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dekor;

class Dekor extends Model
{
    //
    protected $table = 'dekorasi';
    protected $fillable = ['harga','gambar'];
}
