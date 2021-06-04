<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sliderimage extends Model
{
    use HasFactory;
    protected $table='sliderimage';
    protected $fillable = [

        'slider_description',
        'slider_image',
        
        
       
    ];
}
