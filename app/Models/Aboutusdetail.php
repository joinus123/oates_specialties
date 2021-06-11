<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutusdetail extends Model
{
    use HasFactory;
    protected $table='bannerslider';
    protected $fillable = [


           'heading_one',
        	'heading_two',
            'description',
            'image',	
            'section_two_h1',
            'section_two_h2',
            'section_two_txt',
            'section_two_img',
            'section_two_author_name',
            'section_three_h1'	,
            'section_three_h2',	
            'section_three_txt',
            'section_three_img',
            'section_three_author_name'	,
         
];
}
