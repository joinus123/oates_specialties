<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable = [

        'category_id',
        'name',
        'image',
        'orignal_price',
        'discounted_price',
        'price',
        'slug',
        'created_at',
        'updated_at',
        'new_store_product',
        'best_seller',
        'featured_product',
    
    ];


  

}
