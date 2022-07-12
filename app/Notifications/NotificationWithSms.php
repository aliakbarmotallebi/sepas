<?php

namespace App\Notifications;

use App\Channels\NotifyChannel;
use App\Services\SmsMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class NotificationWithSms extends Notification
{
    use Queueable;

    /**
     * @var array
     */
    private array $content;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(array $content)
    {
        $this->content = $content;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [NotifyChannel::class];
    }


    /**
     * Get the sms representation of the notification.
     *
     * @param  mixed  $notifiable
     */
    public function toSms($notifiable)
    {
        return (new SmsMessage())
                ->inputs($this->getContent())
                ->to($notifiable->mobile)
                ->send();
    }


    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     */
    public function toMail($notifiable)
    {
  
        $greeting = 'خانم/ آقای %s%';
        $message = '%s%  شما با شناسه ای %s% باموفقیت ثبت شد.';
        $r=  (new MailMessage)     
                ->greeting( $greeting, $notifiable->fullname )
                ->subject('Notification Subject')
                ->line( $message );
                \Log::debug(json_encode($r));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    /**
     * Get the value of content
     *
     * @return  array
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @param  array  $content
     *
     * @return  self
     */ 
    public function setContent(array $content)
    {
        $this->content = $content;

        return $this;
    }
}
