<?php

namespace App\Models;

use App\Traits\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory, Status;

    protected static function boot()
    {
        parent::boot();
        static::deleted(function ($model) {
            $model->whenDeleteProductSubTotalPriceOrder();
        });
    }

    private function whenDeleteProductSubTotalPriceOrder(): void
    {
        $price = (int)$this->getRawOriginal('price');
        $this->order->decrement('total_price', (int)$price);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function getPriceAttribute($value)
    {
        return number_format($value) ?? 0;
    }
}
