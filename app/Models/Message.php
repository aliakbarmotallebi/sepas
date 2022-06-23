<?php

namespace App\Models;

use App\Traits\Jalali;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Status;

class Message extends Model
{
    use HasFactory, Status, Jalali;

    protected $fillable = [
        'fullname',
        'text',
    ];

}
