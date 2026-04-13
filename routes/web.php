<?php

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\FAQController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\PopupController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\WomansDayBookingController;
use App\Http\Controllers\Admin\TeejBookingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\InternationalBookingController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\ResetPasswordController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\VehicleController;


use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontController::class, 'index'])->name('welcome');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/ride-booking', [FrontController::class, 'rideBooking'])->name('ride-booking');
Route::get('/rides', [FrontController::class, 'rides'])->name('rides');
Route::get('/select-vehicle/{id}', [FrontController::class, 'selectVehicle'])->name('select-vehicle');
Route::get('/booking/extras', [FrontController::class, 'bookingExtras'])->name('booking.extras');
Route::post('/booking/extras', [FrontController::class, 'storeExtras'])->name('booking.extras.store');
Route::get('/offer-form', [FrontController::class, 'offerForm'])->name('offer-form');
Route::get('/safety-guides', [FrontController::class, 'safetyGuides'])->name('safety-guides');
// Route::get('/packages', [FrontController::class, 'package'])->name('packages');
// Route::get('/package-details', [FrontController::class, 'packageDetails'])->name('package-details');
Route::get('/international-patient-services', [FrontController::class, 'internationalPatientServices'])->name('international-patient-services');
Route::get('/international-patient-form', [FrontController::class, 'internationalPatientForm'])->name('international-patient-form');
Route::get('/success-stories', [FrontController::class, 'successStories'])->name('success-stories');
Route::get('/articles', [FrontController::class, 'article'])->name('articles');
Route::get('/article-details/{slug}', [FrontController::class, 'articleDetails'])->name('article-details');
Route::get('/gallery', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/team', [FrontController::class, 'team'])->name('team');
Route::get('/doctor-details/{slug}', [FrontController::class, 'doctorDetails'])->name('doctor-details');
Route::get('/staff-details', [FrontController::class, 'staffDetails'])->name('staff-details');
Route::get('/aesthetic', [FrontController::class, 'aesthetic'])->name('aesthetic');
Route::get('/allery-test', [FrontController::class, 'allergyTest'])->name('allergy-test');
Route::get('/dermatology', [FrontController::class, 'dermatology'])->name('dermatology');
Route::get('/general-surgery', [FrontController::class, 'generalSurgery'])->name('general-surgery');
Route::get('/hair-treatment', [FrontController::class, 'hairTreatment'])->name('hair-treatment');
Route::get('/laser', [FrontController::class, 'laser'])->name('laser');
Route::get('/plastic-surgery', [FrontController::class, 'plasticSurgery'])->name('plastic-surgery');
Route::get('/special-package', [FrontController::class, 'specialPackage'])->name('special-package');
Route::post('/ride-booking', [FrontController::class, 'vehicleBooking'])->name('ride-booking.store');
Route::get('/careers', [FrontController::class, 'careers'])->name('careers');
Route::post('/contact-submit', [FrontController::class, 'sendEmail'])->name('contact-submit');
// Route::get('/popups', [FrontController::class, 'popup'])->name('popups');
Route::post('/international-booking', [FrontController::class, 'internationalBooking'])->name('international-booking');
Route::get('/service-details/{id}', [FrontController::class, 'serviceDetails'])->name('service-details');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('faqs', FAQController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('bookings', BookingController::class);
    Route::resource('payments', PaymentController::class);
    Route::resource('womans-day-bookings', WomansDayBookingController::class);
    Route::resource('teej-bookings', TeejBookingController::class);
    Route::resource('news', NewsController::class);
    Route::resource('staffs', StaffController::class);
    Route::resource('services', ServiceController::class, ['as' => 'admin']);
    Route::resource('brands', BrandController::class);
    Route::resource('vehicles', VehicleController::class);
    Route::resource('popups', PopupController::class);
    Route::resource('careers', CareerController::class);
    Route::resource('users', UserController::class);
    Route::resource('international-bookings', InternationalBookingController::class);
    Route::resource('notices', NoticeController::class);
    Route::resource('uploader', UploadController::class);
    Route::resource('reset-passwords', ResetPasswordController::class);
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('payments/{id}/mark-as-paid', [PaymentController::class, 'markAsPaid'])->name('payments.markAsPaid');
});

// Catch-all route for handling invalid routes
Route::get('/{any}', function () {
    return view('front.404'); // Render the NotFound page in Inertia
})->where('any', '.*');




