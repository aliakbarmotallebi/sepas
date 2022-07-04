<?php

namespace App\Models;

use App\Traits\Jalali;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Comment extends Model
{
    use HasFactory, Jalali, Status, Rateable;

    /**
     * Get the parent commentable model (post or video).
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function replies()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
}
