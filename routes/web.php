<?php

use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\TourController as FrontendTourController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TourSupportController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Fronted
Route::get('/',[FrontendHomeController::class,'landing'])->name('landing.page');
Route::get('/tour/page',[FrontendTourController::class,'tours'])->name('tour.package.page');
Route::get('/tour/more/support/page',[FrontendTourController::class,'moreSupport'])->name('tour.support.package');
Route::get('/tour/support/view/details/{id}',[FrontendTourController::class,'supportDetails'])->name('more.support.view.details');
Route::get('/tour/view/details/{id}',[FrontendTourController::class,'viewDetails'])->name('tour.view.details');
Route::get('/tour/book/now',[FrontendTourController::class,'bookNow'])->name('tour.book.now');
Route::post('/tour/book/store',[FrontendTourController::class,'bookNowStore'])->name('tour.book.now.store');


//Auth



//Backend

 Route::get('/admin',[HomeController::class,'home'])->name('home');
 Route::get('/tour/list',[TourController::class,'tourList'])->name('tour.list');
 Route::get('/tour/form',[TourController::class,'tourForm'])->name('tour.form');
 Route::post('/tour/store',[TourController::class,'tourStore'])->name('tour.store');

 Route::get('/tour/support/form',[TourSupportController::class,'tourSupport'])->name('tour.support.form');
 Route::post('/tour/support/store',[TourSupportController::class,'tourSupportStore'])->name('tour.support.store');
 Route::get('/tour/support/list',[TourSupportController::class,'tourSupportList'])->name('tour.support.list');

