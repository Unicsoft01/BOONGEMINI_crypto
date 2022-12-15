<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('users.index');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// frontedn controller

Route::controller(FrontendController::class)->group(function (){
    Route::get('/', 'index')->name('index');
    Route::get('/about-us', 'AboutUs')->name('about-us');
    Route::get('/services', 'Services')->name('services');
    Route::get('/service-detail', 'ServiceDetails')->name('index');
    Route::get('/faq', 'Faq')->name('faq');
    // Route::get('/our-team', 'Team')->name('our-team');
    Route::get('/pricing', 'Pricing')->name('pricing');
    Route::get('/contact', 'Contact')->name('contact');
    // Route::get('/careers', 'Careers')->name('index');
    // Route::get('/login', 'err')->name('login');
    // Route::get('/register', 'err')->name('register');

});

require __DIR__.'/auth.php';
