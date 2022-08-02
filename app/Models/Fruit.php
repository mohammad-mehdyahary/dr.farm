<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruit extends Model
{
    use HasFactory;
    protected $fillable = [
        'fruit_name_en',
        'fruit_name_fa',
        'fruit_slug_en',
        'fruit_slug_fa',
        'fruit_image',
    ];
}
