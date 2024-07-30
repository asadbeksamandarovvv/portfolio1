<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'services_title',
        'sub_title',
        'year',
        'about_me',
        'address',
        'phone',
        'email',
        'description',
    ];
}
