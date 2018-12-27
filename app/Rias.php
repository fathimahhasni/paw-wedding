<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rias;
// use App\Fotos;
use App\Venues; 

class Rias extends Model
{
    //
    protected $table = 'riasb';
    protected $fillable = ['harga','gambar'];
}

// class Fotos extends Model
// {
//     //
//     protected $table = 'foto';
//     protected $fillable = ['harga','gambar'];
// }

class Venues extends Model
{
    //
    protected $table = 'venue';
    protected $fillable = ['harga','gambar'];
}
