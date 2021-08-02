<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hadith extends Model
{
    protected $fillable = [
        'ayat', 
        'maksud', 
        'riwayat', 
    ];
}
