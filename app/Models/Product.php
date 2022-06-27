<?php

namespace App\Models;

use App\Traits\Jalali;
use App\Traits\Status;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Product extends Model
{
    use HasFactory, Status, Jalali, Sluggable, Rateable;

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

    protected $fillable = [
        'title',
        'slug',
        'description',
        'body',
        'image_url',
        'price',
        'comments_count',
    ];

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

    /**
     * Get all of the post's comments.
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
