<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brandlogo extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='brandlogo';
    protected $fillable = [
    'id',
    'brand_name',
	'brand_logo',
    ];
}
