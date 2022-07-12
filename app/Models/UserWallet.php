<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'amount',
        'description'
    ];

    protected $guard = [
        'status',
        'message'
    ];
    
    const STATUS_PENDING  = "Pending";

    const STATUS_APPROVED = "Approved"; 

    const STATUS_REJECTD  = "Rejected";

    
    const TYPE_DEPOSIT    = "Deposit";

    const TYPE_WITHDRAW   = "Withdraw";

    protected static function boot()
    {
        parent::boot();
        static::saved(function ($model) {
            if($model->status == self::STATUS_APPROVED){
                $user = $model->owner;
                $user->wallet_balance = $model->owner->balance();
                $user->save();
            }
        });
    }


    public function  owner()
    {
        return $this->belongsTo(User::class);
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function scopeTypeDeposit($query)
    {
        return $query->whereType(self::TYPE_DEPOSIT);
    }

    public function scopeTypeWithdraw($query)
    {
        return $query->whereType(self::TYPE_WITHDRAW);
    }

    public function getAmountWithToman()
    {
        return number_format($this->amount) . " تومان ";
    }
}
