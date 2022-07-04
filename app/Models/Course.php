<?php

namespace App\Models;

use App\Traits\Jalali;
use App\Traits\Status;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory, Status, Sluggable, Jalali;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'body',
        'image_url',
        'price',
        'video_url',
        'topics',
        'requirements',
        'instructor_id',
        'unit',
        'type',
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

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    public function categories()
    {
        return $this->morphToMany(Comment::class, 'categorizables');
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = $value;
        $this->attributes['body'] = truncate($value);
    }

    public function getPriceAttribute($value)
    {
        return number_format($value) ?? 0;
    }

    public function getImageUrl()
    {
        return asset($this->image_url ?? 'images/placeholder.svg');
    }

    public function getImagesUrl()
    {
        if ($this->images->count()) {
            return $this->images;
        }

        return collect();
    }

    public function getVideoUrl()
    {
        return $this->video_url ?? null;
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
