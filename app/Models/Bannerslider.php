<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bannerslider extends Model
{
    use HasFactory;
    protected $table='bannerslider';
    protected $fillable = [
    'id',
    'heading_one',
	'heading_two',
    'heading_three',
    'bannerslider_image',
    ];
}
