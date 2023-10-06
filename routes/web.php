<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SslFlightController;
use App\Http\Controllers\TourSupportController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\TourController as FrontendTourController;

//SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
Route::post('/pay/{id}', [SslCommerzPaymentController::class, 'index'])->name('pay.now');
Route::post('/pay/hotel/{id}', [SslController::class, 'indexHotel'])->name('pay.now.hotel');
Route::post('/pay/flight/{id}', [SslFlightController::class, 'indexFlight'])->name('pay.now.flight');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/success', [SslController::class, 'successful']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
//SSLCOMMERZ END



//Fronted
Route::get('/',[FrontendHomeController::class,'landing'])->name('landing.page');
Route::get('/tour/page',[FrontendTourController::class,'tours'])->name('tour.package.page');
Route::get('/tour/more/support/page',[FrontendTourController::class,'moreSupport'])->name('tour.support.package');
Route::get('/tour/support/view/details/{id}',[FrontendTourController::class,'supportDetails'])->name('more.support.view.details');
Route::get('/tour/view/details/{id}',[FrontendTourController::class,'viewDetails'])->name('tour.view.details');
Route::get('/about',[FrontendHomeController::class,'aboutUs']);
Route::get('/customer/profile',[TourController::class,'CustomerProfile'])->name('customer.profile');
Route::get('/hotel',[HotelController::class,'hotel']);
Route::get('/hotelDetails/{id}',[HotelController::class,'hotelDetails']);
Route::get('/flight',[FlightController::class,'flight']);
Route::get('/flight/view/{id}',[FlightController::class,'flightView']);
Route::get('/search',[HomeController::class,'search'])->name('user.search');
Route::post('/tour/rate/{id}', [TourController::class,'storeRating'])->name('tour.rate');
Route::post('/hotel/rate/{id}', [HotelController::class,'storeRatingHotel'])->name('hotel.rate');
Route::post('/flight/rate/{id}', [FlightController::class,'storeRatingFlight'])->name('flight.rate');
Route::get('/contact', [ContactController::class,'contact']);
Route::post('/contactStore', [ContactController::class,'contactStore']);
//Notify
Route::get('/notification',[NotificationController::class,'notification'])->name('get.notification');

//Auth Frontend
Route::get('/registration',[AuthController::class,'registration'])->name('registration.website');
Route::post('/registration/store',[AuthController::class,'registrationStore'])->name('registration.website.store');
Route::get('/login/form',[AuthController::class,'loginForm'])->name('login');
Route::post('/login/process',[AuthController::class,'loginProcess'])->name('login.process');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');


//Backend

 Route::group(['middleware'=>'auth','admin','prefix'=>'admin'],function(){
 //Booking Frontend
 Route::get('/tour/book/now/{id}',[FrontendTourController::class,'bookNow'])->name('tour.book.now');
 Route::post('/tour/book/store',[FrontendTourController::class,'bookNowStore'])->name('tour.book.now.store');
 Route::get('/hotel/book/now/{id}',[FrontendTourController::class,'hotelNow'])->name('hotel.book.now');
 Route::get('/flightBook/{id}',[FlightController::class,'bookFlight'])->name('book.flight');


 Route::group(['middleware'=>'admin'],function(){
 //Tour
 Route::get('/',[HomeController::class,'home'])->name('home');
 Route::get('/tour/list',[TourController::class,'tourList'])->name('tour.list');
 Route::get('/tour/form',[TourController::class,'tourForm'])->name('tour.form');
 Route::post('/tour/store',[TourController::class,'tourStore'])->name('tour.store');
 Route::get('/delete/tour/{id}',[TourController::class,'tourDelete'])->name('tour.delete');
 Route::get('/edit/tour/{id}',[TourController::class,'tourEdit'])->name('tour.edit');
 Route::post('/update/tour/{id}',[TourController::class,'tourUpdate'])->name('tour.update');
 Route::get('/view/tour/{id}',[TourController::class,'tourView'])->name('tour.view');
 //Tour Support
 Route::get('/tour/support/form',[TourSupportController::class,'tourSupport'])->name('tour.support.form');
 Route::post('/tour/support/store',[TourSupportController::class,'tourSupportStore'])->name('tour.support.store');
 Route::get('/tour/support/list',[TourSupportController::class,'tourSupportList'])->name('tour.support.list');
 Route::get('/tour/support/delete/{id}',[TourSupportController::class,'tourSupportDelete'])->name('tour.support.delete');
 Route::get('/tour/support/edit/{id}',[TourSupportController::class,'tourSupportEdit'])->name('tour.support.edit');
 Route::post('/tour/support/update/{id}',[TourSupportController::class,'tourSupportUpdate'])->name('tour.support.update');
 Route::get('/tour/support/view/{id}',[TourSupportController::class,'tourSupportView'])->name('tour.support.view');
 //Booking
 Route::get('/booking/list',[TourController::class,'bookingList'])->name('booking.list');

 Route::get('/booking/flight',[FlightController::class,'bookingListFlight'])->name('booking.flight');
 Route::get('/booking/hotel',[HotelController::class,'bookingListHotel'])->name('booking.hotel');

 Route::get('/my/profile',[TourController::class,'myProfile'])->name('my.profile');
 //Hotel
 Route::get('/hotelForm',[HotelController::class,'hotelForm'])->name('hotel.form');
 Route::post('/hotelStore',[HotelController::class,'hotelStore'])->name('hotel.store');
 Route::get('/hotel/delete/{id}',[HotelController::class,'hotelDelete'])->name('hotel.delete');
 Route::get('/list',[HotelController::class,'hotelList'])->name('hotel.list');
 //Flight
 Route::get('/flightForm',[FlightController::class,'flightForm'])->name('flight.form');
 Route::post('/flightStore',[FlightController::class,'flightStore'])->name('flight.Store');
 Route::get('/delete/{id}',[FlightController::class,'flightDelete'])->name('flight.delete');
 Route::get('/flightList',[FlightController::class,'flightList'])->name('flight.list');
 //Report
 Route::get('/report',[ReportController::class,'report'])->name('report');
 Route::get('/report/search',[ReportController::class,'reportSearch'])->name('order.report.search');
});

});
