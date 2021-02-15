<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'cover','price', 'discount', 'description', 'slug']; //nurodomi kokie laukai bus pildomi
}
