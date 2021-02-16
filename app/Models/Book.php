<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'cover','price', 'discount', 'description', 'slug', 'user_id']; //nurodomi kokie laukai bus pildomi

    public function genres()
    {
        return $this->belongsToMany(Genre::class); 
    }

    public function author()
    {
        return $this->belongsToMany(Author::class); 
    }

    public function user()
    {
        return $this->belongsToMany(User::class); 
    }


}
