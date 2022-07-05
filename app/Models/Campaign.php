<?php

namespace App\Models;

use App\Traits\Jalali;
use App\Traits\Status;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Campaign extends Model
{
    use HasFactory, Status, Jalali, Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'safir_name',
        'image_url',
        'extra_price',
        'total_price'
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

    public function getTotalPriceAttribute($value)
    {
        return number_format($value) ?? 0;
    }

    public function getImageUrl()
    {
        return asset($this->image_url ?? 'images/placeholder.svg');
    }
}
