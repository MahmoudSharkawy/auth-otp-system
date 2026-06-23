<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendOTPNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('رمز التحقق الخاص بك (OTP)')
                    ->line('لقد طلبت تسجيل الدخول. استخدم الرمز التالي لإتمام العملية:')
                    ->line('**' . $this->otp . '**')
                    ->line('هذا الرمز صالح لمدة 10 دقائق فقط.')
                    ->line('إذا لم تطلب هذا الرمز، يمكنك تجاهل هذه الرسالة.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
