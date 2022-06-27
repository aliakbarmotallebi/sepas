<?php

namespace App\Models;

use App\Traits\Jalali;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, Status, Jalali;

    public function getTotalPriceAttribute($value)
    {
        return number_format($value) ?? 0;
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }


    public function products_order()
    {
        return $this->hasMany(ProdcutOrder::class, 'order_id');
    }
    
}
