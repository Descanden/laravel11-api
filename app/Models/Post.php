<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute; // Import the Attribute class

class Post extends Model
{
    use HasFactory;

    /**
     *
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'title',
        'content',
    ];

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => url('/storage/posts/' . $image),
        );
    }
}