<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    
    protected $fillable  = [
        'title',
        'image',
        'full_name',
        'birthday',
        'website',
        'phone',
        'city',
        'age',
        'degree',
        'email',
        'freelance',
        'sub_title',
        'happy_clients',
        'projects',
        'hours_of_support',
        'awards',
        'skils_title',
        'html',
        'css',
        'javascript',
        'php',
        'laravel'
    ];
}
