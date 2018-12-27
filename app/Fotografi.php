<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fotografi;
class Fotografi extends Model
{
    //
    
        protected $table = 'foto';
        protected $fillable = ['harga','gambar'];

}
