<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'year',
        'about_me',
        'address',
        'phone',
        'email',
    ];
}
