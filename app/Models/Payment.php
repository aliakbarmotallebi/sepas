<?php

namespace App\Models;

use App\Traits\Jalali;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory, Status, Jalali;


    public const PENDING_STATUS   = 'PENDING';

    public const REJECTED_STATUS  = 'REJECTED';

    public const COMPLETED_STATUS = 'COMPLETED';

    
    protected $services = [
        'App\Models\Order' => 'خرید',
        'App\Models\Invoice' => 'تراکنش'
    ];


    protected const STATUS_NAME = [
        self::PENDING_STATUS => 'معلق',
        self::REJECTED_STATUS  => 'رد شده',
        self::COMPLETED_STATUS  => 'کامل شده', 
    ];

    public function paymentable()
    {
        return $this->morphTo();
    }

    public function getNameService()
    {
        return $this->services[$this->paymentable_type] ?? NULL;
    }

    public function getStatusName()
    {
        return self::STATUS_NAME[$this->status] ?? NULL;
    }

    public function getAmountAttribute($value)
    {
        return number_format($value) ?? 0;
    }

    public function isPaid()
    {
        return ($this->status === self::COMPLETED_STATUS);
    }

}
