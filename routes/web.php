<?php

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

 Route::get('/',[HomeController::class,'home'])->name('home');
 Route::get('/tour/list',[TourController::class,'tourList'])->name('tour.list');
 Route::get('/tour/form',[TourController::class,'tourForm'])->name('tour.form');
 Route::post('/tour/store',[TourController::class,'tourStore'])->name('tour.store');

 Route::get('/tour/support/form',[TourSupportController::class,'tourSupport'])->name('tour.support.form');
 Route::post('/tour/support/store',[TourSupportController::class,'tourSupportStore'])->name('tour.support.store');
 Route::get('/tour/support/list',[TourSupportController::class,'tourSupportList'])->name('tour.support.list');

