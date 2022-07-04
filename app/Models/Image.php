<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'url'
    ];

    public function getImageUrl() 
    {
        return asset($this->url ?? 'images/placeholder.svg');
    }


}
