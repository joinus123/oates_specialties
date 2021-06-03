<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitesetting extends Model
{
    use HasFactory;
    protected $table='sitesettings';
    protected $fillable = [

        'header_logo',
        'footer_logo',
        'copy_righttext',
        
       
    ];
}
