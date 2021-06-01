<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialmedialink extends Model
{
    use HasFactory;
    protected $table='socialmedialink';
    protected $fillable = [
    'id',
    'socialmedialink_name',
	'socialmedialink_image',
    ];
}
