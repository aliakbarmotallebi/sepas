<?php

namespace App\Models;

use App\Traits\Jalali;
use App\Traits\Status;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, Status, Jalali, Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'image_url',
        'schedule_at',
    ];

    protected $casts = [
        'schedule_at' => 'date:hh:mm',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }

    public function getPriceAttribute($value)
    {
        return number_format($value) ?? 0;
    }

    public function getImageUrl()
    {
        return asset($this->image_url ?? 'images/placeholder.svg');
    }



    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
