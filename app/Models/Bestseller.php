<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestseller extends Model
{
    use HasFactory;
    protected $table='bestsellerproduct';
    protected $fillable=[
        'bestproduct_img', 
        'bestproduct_name',	
        'bestproduct_description',
        'bestproduct_price',
    ];
}
