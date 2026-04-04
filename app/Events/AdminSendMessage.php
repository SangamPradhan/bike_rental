<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AdminSendMessage
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $admin;
    public $title;
    public $message;

    /**
     * Create a new event instance.
     *
     * @param User $admin
     * @param string $message
     * @return void
     */
    public function __construct(User $admin, $title, $message)
    {
        $this->admin = $admin;
        $this->title = $title;
        $this->message = $message;
      
    }
}
