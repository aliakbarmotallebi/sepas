<?php namespace App\Channels;

use App\Services\SmsMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyChannel
{
    public function send ($notifiable, Notification $notification) 
    {
        if($notifiable->hasMobile()){
            return $notification->toSms($notifiable);
        }
        return $notification->toMail($notifiable);
    }
}