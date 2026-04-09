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
use App\Models\Brand;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Session;



class FrontController extends Controller
{
    public function index()
    {
        $data['articles'] = News::orderBy('order', 'ASC')->limit(3)->get();
        $data['testimonials'] = Testimonial::orderBy('order', 'ASC')->get();
        $data['faqs'] = FAQ::orderBy('created_at', 'desc')->limit(5)->get();
        $data['popups'] = Popup::latest()->first();
        $data['brands'] = Brand::orderBy('order', 'ASC')->get();
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

    public function rideBooking()
    {
        $services = Services::all();
        $booking = Session::get('booking', []);

        if (empty($booking['vehicle_id'])) {
            return redirect()->route('rides')->with('error', 'Please select a vehicle first.');
        }

        $vehicle = Vehicle::with('brand')->findOrFail($booking['vehicle_id']);
        return view('front.ride-booking', compact('services', 'vehicle', 'booking'));
    }

    public function rides(Request $request)
    {
        $query = Vehicle::with('brand')->where('is_active', true);

        if ($request->has('type') && $request->type != 'all') {
            $query->where('type', $request->type);
        }

        if ($request->has('brand') && $request->brand != 'all') {
            $query->where('brand_id', $request->brand);
        }

        $vehicles = $query->orderBy('order', 'ASC')->get();
        $brands = Brand::orderBy('order', 'ASC')->get();

        return view('front.rides', compact('vehicles', 'brands'));
    }

    public function selectVehicle($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $booking = Session::get('booking', []);
        $booking['vehicle_id'] = $id;
        $booking['base_price'] = $vehicle->rate_per_day;
        // Default duration 1 day for now, can be updated in Step 3
        $booking['days'] = 1;

        Session::put('booking', $booking);
        return redirect()->route('booking.extras');
    }

    public function bookingExtras()
    {
        $booking = Session::get('booking', []);
        if (empty($booking['vehicle_id'])) {
            return redirect()->route('rides')->with('error', 'Please select a vehicle first.');
        }

        $vehicle = Vehicle::with('brand')->findOrFail($booking['vehicle_id']);
        return view('front.booking-extras', compact('vehicle', 'booking'));
    }

    public function storeExtras(Request $request)
    {
        $booking = Session::get('booking', []);
        $booking['extras'] = $request->input('extras', []); // array of extra names or keys

        // Calculate extras total (static prices)
        $extra_total = 0;
        $prices = [
            'roadside' => 150,
            'panniers' => 120,
            'gear' => 250,
            'satellite' => 80
        ];

        foreach ($booking['extras'] as $extra) {
            if (isset($prices[$extra])) {
                $extra_total += $prices[$extra];
            }
        }

        $booking['extra_total_per_day'] = $extra_total;
        Session::put('booking', $booking);

        return redirect()->route('ride-booking');
    }

    public function offerForm()
    {
        return view('front.offer-form');
    }

    public function safetyGuides()
    {
        return view('front.safety_guides');
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


    //For appointment booking
    public function vehicleBooking(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'phone' => 'required|numeric',
                'email' => 'required|email',
                'preferred_date' => 'required',
                'days' => 'required',
                'total_price' => 'required',
                'id_no' => 'required',
                'exploring_region' => 'required',
                'license_attachment' => 'required|file|mimes:jpg,jpeg,png,pdf|max:5120',
            ]);

            $data = $request->except('license_attachment');

            // Handle file upload
            if ($request->hasFile('license_attachment')) {
                $file = $request->file('license_attachment');
                $filename = time() . '_' . $request->name . '_' . $file->getClientOriginalName();
                $filename = preg_replace('/\s+/', '_', $filename); // sanitize spaces
                $file->move(storage_path('app/public/license_attachments'), $filename);
                $data['license_attachment'] = $filename;
            }

            // Merge with session data if not provided in request
            $bookingSession = Session::get('booking', []);
            $data['vehicle_id'] = $bookingSession['vehicle_id'] ?? null;

            // Ensure extras is properly handled as JSON
            if ($request->has('extras')) {
                $data['extras'] = $request->extras;
            } else {
                $data['extras'] = json_encode($bookingSession['extras'] ?? []);
            }

            $booking = new Booking($data);
            $booking->save();

            // Clear session after successful save
            Session::forget('booking');

            $emailDetails = [
                'name' => $booking->name,
                'phone' => $booking->phone,
                'preferred_date' => $booking->preferred_date ?? 'N/A',
                'vehicle' => ($booking->vehicle && $booking->vehicle->brand) ? $booking->vehicle->brand->name . ' ' . $booking->vehicle->title : 'Adventure Machine',
                'days' => $booking->days ?? 1,
                'brand' => ($booking->vehicle && $booking->vehicle->brand) ? $booking->vehicle->brand->name : 'N/A',
                'total_amount' => $booking->total_price ?? 'N/A',
                'extras' => implode(', ', array_map('ucfirst', json_decode($booking->extras, true) ?? [])) ?: 'None',
                'exploring_region' => $booking->exploring_region ?? 'N/A',
            ];

            if ($request->has('email')) {
                Mail::to($data['email'])->send(new BookingMail($emailDetails));
            }

            // Send notification to Owner
            $ownerEmail = env('MAIL_FROM_ADDRESS', 'pradhansangam169@gmail.com');
            Mail::to($ownerEmail)->send(new \App\Mail\BookingNotifyingMail($emailDetails));

            $message = "Your adventure has been booked! We will contact you soon.";
            return redirect()->route('rides')->with('success', $message);
        } catch (\Exception $e) {
            \Log::error('Booking Error: ' . $e->getMessage());
            $message = 'Please try again later. ' . $e->getMessage();
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



