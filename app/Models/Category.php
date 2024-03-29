<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'label',
        'parent_id',
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
                'source' => 'label',
            ],
        ];
    }

    public function childs()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    public function categorizable() {
        return $this->morphTo();
    }
}
