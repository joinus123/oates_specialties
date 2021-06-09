<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='orders';
    protected $fillable = [
        'full_name',	
        'last_name',	
        'email',
        'phone',
        'address',
        'city',
        'zipcode',
        'select_state',
        'select_country',
        'additional_brief',
        'shipping_address'	,
        'billing_address',
        'number',
        'exp_month',
        'exp_year',
        'cvc'	,
        'created_at',
        'updated_at',
        'user_id',
        'total_price',
    ];
}
