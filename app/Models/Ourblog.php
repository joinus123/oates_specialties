<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ourblog extends Model
{
    use HasFactory;
    protected $table='blog';
    protected $fillable = [
    'id',
    'heading',
	'description',
   'image',
    ];
}