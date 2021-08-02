<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuliah extends Model
{
    protected $fillable = [
        'tajuk', 
        'tarikh', 
        'penceramah', 
        'gambar', 
        'status', 
    ];
}
