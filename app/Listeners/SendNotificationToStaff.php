<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\AdminSendMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\NewNotification;

class SendNotificationToStaff implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param  AdminSendMessage  $event
     * @return void
     */
    public function handle(AdminSendMessage $event)
    {
        $admin = $event->admin;
        $title = $event->title;
        $message = $event->message;

        // Send notification to the admin who created the notification
        // $admin->notify(new NewNotification($message));

        // Get staff members
        $staffMembers = User::role('staff')->get();

        // Send notification to each staff member
        foreach ($staffMembers as $staffMember) {
            $staffMember->notify(new NewNotification($title,$message));
        }
    }
}
