<?php

namespace App\Models;

use App\Traits\Jalali;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory, Jalali;

    protected $fillable = [
        'message',
        'owner_id',
        'course_id',
        'fellow_id'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function fellow()
    {
        return $this->belongsTo(User::class, 'fellow_id');
    }
}
