<?php

namespace App\Models;

use App\Traits\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory, Status;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'body',
        'image',
        'price',
        'video',
        'topics',
        'requirements',
        'faqs',
    ];


        /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
