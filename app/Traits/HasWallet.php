<?php

namespace App\Traits;

use App\Models\UserWallet;

trait HasWallet{

    public function userWallets()
    {
        return $this->hasMany(UserWallet::class, 'owner_id');
    }

    public function getWalletDeposits()
    {
        return $this->hasMany(UserWallet::class)->typeDeposit();
    }

    public function getWalletWithdraws()
    {
        return $this->hasMany(UserWallet::class)->typeWithdraw();
    }

    /**
     * @return mixed
     */
    public function validUserWallets()
    {
        return $this->userWallets()->whereStatus(UserWallet::STATUS_APPROVED);
    }

    /**
     * @return mixed
     */
    public function deposit()
    {
        return $this->validUserWallets()
            ->whereType(UserWallet::TYPE_DEPOSIT)
            ->sum('amount');
    }

    /**
     * @return mixed
     */
    public function withdraw()
    {
        return $this->validUserWallets()
            ->whereType(UserWallet::TYPE_WITHDRAW)
            ->sum('amount');
    }

    /**
     * @return mixed
     */
    public function balance()
    {
        return ($this->deposit() - $this->withdraw());
    }

    /**
     * @param $amount
     * @return bool
     */
    public function allowWithdraw($amount) : bool
    {
        return $this->balance() >= $amount;
    }

    public function getWalletBalance()
    {
        return number_format($this->wallet_balance);
    }

}