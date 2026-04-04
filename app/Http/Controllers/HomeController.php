<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Retrieve the latest 10 bookings
        $bookings = Booking::latest()->limit(10)->get();

        $news = News::latest()->limit(5)->get();
        $user = auth()->user();
        $unreadNotificationsCount = $user->unreadNotifications()->count();


        $notifications = $user->Notifications()->orderByDesc('created_at')->get();

        // Mark the retrieved notifications as read
        $user->unreadNotifications->markAsRead();


        return view('home', compact('bookings', 'notifications', 'unreadNotificationsCount', 'news'));
    }

    public function homeRedirect()
    {
        return redirect()->route("home");
    }
}
