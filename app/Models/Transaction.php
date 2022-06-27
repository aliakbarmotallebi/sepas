<?php

namespace App\Models;

use App\Traits\Jalali;
use App\Traits\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory, Status, Jalali;

    public const PENDING_STATUS   = 'PENDING';

    public const REJECTED_STATUS  = 'REJECTED';

    public const COMPLETED_STATUS = 'COMPLETED';

    
    protected $services = [
        'App\Models\Event' => 'رویداد',
        'App\Models\Campaign' => 'کمپین',
        'App\Models\Course' => 'دوره',
    ];

    protected const STATUS_NAME = [
        self::PENDING_STATUS => 'معلق',
        self::REJECTED_STATUS  => 'رد شده',
        self::COMPLETED_STATUS  => 'کامل شده', 
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function transactable()
    {
        return $this->morphTo();
    }

    public function getNameService()
    {
        return $this->services[$this->transactable_type] ?? NULL;
    }

    public function getStatusName()
    {
        return self::STATUS_NAME[$this->status] ?? NULL;
    }

    public function getAmountAttribute($value)
    {
        return number_format($value) ?? 0;
    }
}
