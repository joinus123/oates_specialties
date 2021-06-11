<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class editprofile extends Model
{
    use HasFactory;
    protected $table='editprofile' ;
    protected $fillable = [
        'id',
    	'business_name',
        'username',
        'email_address',
        'address',
        'profile_image',
    ];
}
