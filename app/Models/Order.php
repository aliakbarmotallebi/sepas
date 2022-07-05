<?php

namespace App\Models;

use App\Traits\Jalali;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, Status, Jalali;

    // public function getTotalPriceAttribute($value)
    // {
    //     return number_format($value) ?? 0;
    // }

    public function getTotalPrice()
    {
        return number_format($this->total_price) ?? 0;
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function order_products()
    {
        return $this->hasMany(OrderProduct::class, 'order_id');
    }

    public function payment()
    {
        return $this->morphOne(Payment::class, 'paymentable');
    }

    public function isPaid()
    {
        return $this->payment()->count() ?
                $this->payment->isPaid() : false;
    }

    public function isUnpaid()
    {
        return ! $this->isPaid();
    }
}
