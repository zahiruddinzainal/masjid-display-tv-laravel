<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quran extends Model
{
    protected $fillable = [
        'ayat', 
        'maksud', 
        'surah', 
    ];
}
