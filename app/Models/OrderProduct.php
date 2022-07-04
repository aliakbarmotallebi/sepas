<?php

namespace App\Models;

use App\Traits\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory, Status;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getPriceAttribute($value)
    {
        return number_format($value) ?? 0;
    }
}
