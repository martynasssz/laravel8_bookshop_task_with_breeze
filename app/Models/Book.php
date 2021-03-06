<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['title', 'cover','price', 'discount', 'description', 'slug', 'user_id']; //nurodomi kokie laukai bus pildomi

    public function genres()
    {
        return $this->belongsToMany(Genre::class); 
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class); 
    }

    public function user()
    {
        return $this->belongsTo(User::class); 
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function getRouteKeyName(): string
    {
        return 'slug';
    }


}
