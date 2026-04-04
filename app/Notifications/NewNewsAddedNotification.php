<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;

class NewNewsAddedNotification extends Notification
{
    use Queueable;

    protected $staffName;

    public function __construct()
    {
        $this->staffName = auth()->user()->name;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'message' => $this->staffName . ' added the new post.',
        ];
    }
}
