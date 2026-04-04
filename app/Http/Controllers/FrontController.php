<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Gallery;
use App\Models\Staff;
use Illuminate\Support\Facades\Mail;
use App\Models\WomansDayBooking;
use App\Mail\WomansDayBookingMail;
use App\Mail\BookingMail;
use App\Models\Booking;
use App\Models\InternationalBooking;
use App\Models\FAQ;
use App\Models\Career;
use App\Notifications\WomenDayBookingNotification;
use App\Notifications\BookingNotification;
use App\Notifications\InternationalBookingNotification;
use App\Events\WomenDayBookingEvent;
use App\Events\BookingEvent;
use App\Mail\ContactFormMail;
use App\Mail\InternationalBookingMail;
use App\Events\InternationalBookingEvent;
use App\Models\Popup;
use App\Models\Services;



class FrontController extends Controller
{
    public function index()
    {
        $data['articles'] = News::orderBy('order', 'ASC')->limit(3)->get();
        $data['testimonials'] = Testimonial::orderBy('order', 'ASC')->get();
        $data['faqs'] = FAQ::orderBy('created_at', 'desc')->limit(5)->get();
        $data['popups'] = Popup::latest()->first();
        return view('welcome', $data);
    }

    public function about()
    {
        $data['staffs'] = Staff::whereIn('designation', ['Doctor', 'Head Nurse', 'Head Pharmacist'])->get();
        return view('front.about', $data);
    }




    public function gallery()
    {
        $data['galleries'] = Gallery::orderBy('order', 'ASC')->paginate(20);
        return view('front.gallery', $data);
    }

    public function article()
    {
        $data['articles'] = News::orderBy('order', 'ASC')->paginate(9);
        return view('front.articles', $data);
    }

    public function articleDetails($slug)
    {
        $data['article'] = News::with('user')->where('slug', $slug)->firstOrFail();
        $data['relatedArticles'] = News::where('id', '!=', $data['article']->id)->orderBy('created_at', 'desc')->limit(4)->get();
        return view('front.article-details', $data);
    }



    public function package()
    {
        return view('front.packages');
    }

    public function packageDetails()
    {
        return view('front.package-details');
    }


    public function internationalPatientServices()
    {
        return view('front.international-patient-services');
    }

    public function team()
    {
        $data['head_staffs'] = Staff::whereIn('designation', ['Doctor', 'Head Nurse', 'Head Pharmacist', 'Nurse'])->get();
        $data['staffs'] = Staff::whereNotIn('designation', ['Doctor', 'Head Nurse', 'Head Pharmacist', 'Founder', 'Nurse'])->get();
        return view('front.team', $data);
    }

    public function doctorDetails($slug)
    {
        $item = Staff::where('slug', $slug)->firstOrFail();
        return view('front.doctor-details', compact('item'));
    }


    public function staffDetails()
    {
        $data['staffs'] = Staff::whereNotIn('designation', ['Doctor', 'Head Nurse', 'Head Pharmacist', 'Founder', 'Nurse'])->get();
        return view('front.staff-details', $data);
    }
    public function successStories()
    {
        return view('front.success-stories');
    }

    public function appointment()
    {
        $services = Services::all();
        return view('front.appointment', compact('services'));
    }

    public function offerForm()
    {
        return view('front.offer-form');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function services()
    {
        $services = Services::orderBy('order', 'ASC')->get();
        return view('front.services', compact('services'));
    }

    public function test()
    {
        $services = Services::orderBy('id', 'DESC')->get();
        return view('front.service', compact('services'));
    }

    public function careers()
    {
        $careers = Career::orderBy('created_at', 'desc')->get();
        return view('front.careers', ['careers' => $careers]);
    }


    // For Womans Day Booking
    public function womansDayForm(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'phone' => 'required'
            ]);
            $data = $request->all();
            $data['type'] = "teej";
            $item = new WomansDayBooking($data);
            $item->save();
            event(new WomenDayBookingEvent($item));
            $message = 'You have successfully booked your appointment.';
            return back()->with('success', $message);
        } catch (\Exception $e) {
            $message = 'Please try again later.';
            return back()->with('error', $message);
        }
    }

    // Static Pages for Packages
    public function aesthetic()
    {
        return view('front.packages.aesthetic');
    }

    public function allergyTest()
    {
        return view('front.packages.allergy-test');
    }

    public function dermatology()
    {
        return view('front.packages.dermatology');
    }

    public function generalSurgery()
    {
        return view('front.packages.general-surgery');
    }

    public function hairTreatment()
    {
        return view('front.packages.hair-treatment');
    }

    public function laser()
    {
        return view('front.packages.laser');
    }

    public function plasticSurgery()
    {
        return view('front.packages.plastic-surgery');
    }

    public function specialPackage()
    {
        return view('front.packages.special-package');
    }

    //For appointment booking
    public function appointmentBooking(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
            ]);

            $data = $request->all();
            $booking = new Booking($data);
            $booking->save();

            $name= $data['name'];
            $emailDetails = [
                'name' => $data['name'],
                'preferred_date' => $data['preferred_date'],
                'preferred_time' => $data['preferred_time'],
                'appointment_type' => $data['appointment_type'],
            ];

            Mail::to($data['email'])->send(new BookingMail($emailDetails, $name));

            //event(new BookingEvent($booking));
            $message = "Your reservation has been confirmed.";
            return back()->with('success', $message);
        } catch (\Exception $e) {
            $message = 'Please try again later.';
            return back()->with('error', $message);
        }
    }

    //contact form submission
    public function sendEmail(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);

            // Send mail to email address
            Mail::to('pandeybikram140@gmail.com')->send(new ContactFormMail($request->all()));

            // Flash success message
            $request->session()->flash('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            $request->session()->flash('error', 'An error occurred while sending the message.');
            \Log::error($e);
            return redirect()->back();
        }

        return redirect()->back();
    }

    // For International Booking
    public function internationalBooking(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'phone' => 'required'
            ]);
            $data = $request->all();
            $item = new InternationalBooking($data);
            $item->save();
            event(new InternationalBookingEvent($item));
            $message = 'You have successfully booked your appointment.';
            return back()->with('success', $message);
        } catch (\Exception $e) {
            $message = 'Please try again later.';
            return back()->with('error', $message);
        }
    }

    public function serviceDetails($id)
    {
        $service = Services::findOrFail($id);
        $relatedServices = Services::where('category', $service->category)
                                ->where('id', '!=', $service->id)
                                ->limit(5)
                                ->get();
        return view('front.service-details', compact('service', 'relatedServices'));
    }

}



