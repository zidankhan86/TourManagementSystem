<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourSupportController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\TourController as FrontendTourController;
use App\Http\Controllers\NotificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (
) {
    return view('welcome');
});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay/{id}', [SslCommerzPaymentController::class, 'index'])->name('pay.now');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
//SSLCOMMERZ END



//Fronted
Route::get('/',[FrontendHomeController::class,'landing'])->name('landing.page');
Route::get('/tour/page',[FrontendTourController::class,'tours'])->name('tour.package.page');
Route::get('/tour/more/support/page',[FrontendTourController::class,'moreSupport'])->name('tour.support.package');
Route::get('/tour/support/view/details/{id}',[FrontendTourController::class,'supportDetails'])->name('more.support.view.details');
Route::get('/tour/view/details/{id}',[FrontendTourController::class,'viewDetails'])->name('tour.view.details');
Route::get('/home/about',[FrontendHomeController::class,'aboutUs'])->name('about.us');
Route::get('/customer/profile',[TourController::class,'CustomerProfile'])->name('customer.profile');

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

    Route::group(['middleware'=>'admin'],function(){

 Route::get('/',[HomeController::class,'home'])->name('home');
 Route::get('/tour/list',[TourController::class,'tourList'])->name('tour.list');
 Route::get('/tour/form',[TourController::class,'tourForm'])->name('tour.form');
 Route::post('/tour/store',[TourController::class,'tourStore'])->name('tour.store');

 Route::get('/tour/support/form',[TourSupportController::class,'tourSupport'])->name('tour.support.form');
 Route::post('/tour/support/store',[TourSupportController::class,'tourSupportStore'])->name('tour.support.store');
 Route::get('/tour/support/list',[TourSupportController::class,'tourSupportList'])->name('tour.support.list');
 Route::get('/tour/support/delete/{id}',[TourSupportController::class,'tourSupportDelete'])->name('tour.support.delete');
 Route::get('/tour/support/edit/{id}',[TourSupportController::class,'tourSupportEdit'])->name('tour.support.edit');
 Route::post('/tour/support/update/{id}',[TourSupportController::class,'tourSupportUpdate'])->name('tour.support.update');
 Route::get('/tour/support/view/{id}',[TourSupportController::class,'tourSupportView'])->name('tour.support.view');

 Route::get('/delete/tour/{id}',[TourController::class,'tourDelete'])->name('tour.delete');
 Route::get('/edit/tour/{id}',[TourController::class,'tourEdit'])->name('tour.edit');
 Route::post('/update/tour/{id}',[TourController::class,'tourUpdate'])->name('tour.update');
 Route::get('/view/tour/{id}',[TourController::class,'tourView'])->name('tour.view');


Route::get('/booking/list',[TourController::class,'bookingList'])->name('booking.list');
Route::get('/my/profile',[TourController::class,'myProfile'])->name('my.profile');

});

});
