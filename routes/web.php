<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\PlansController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ReferralsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UserBankController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WithdrawalController;

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('users.index');
    })->name('dashboard');
    
    Route::get('/promotional_mails', function () {
        return view('users.promotion_mails');
    });//->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('Ticket', TicketsController::class)->only([
        'index', 'store'  //, 'update', 'destroy'
    ]);
    Route::resource('Review', ReviewController::class)->only([
        'store'  //, 'update', 'destroy', 'index', 
    ]);
    // 
    Route::resource('Deposit', DepositController::class)->except([
        'update', 'destroy', 'show', 'edit', 'destroy' 
    ]);
    Route::resource('Withdrawal', WithdrawalController::class);
    Route::resource('Ref', ReferralsController::class);
    Route::resource('Payout', UserBankController::class);
    Route::get('Comfirmation/{id}', [DepositController::class, 'comfirmation'])->name('Deposit.comfirmation');
    Route::post('completeTrans/{id}', [DepositController::class, 'completeTrans'])->name('Deposit.completeTrans');
    // bank details for users
        
    // Route::controller(UsersController::class)->group(function (){
    //     Route::get('/banks', 'UserBank')->name('users.bank');
        
    // });
});

// frontedn controller
Route::resource('Property', PropertyController::class)->only([
    'store'  //, 'update', 'destroy', 'index', 
]);;
Route::resource('Ref', ReferralsController::class)->only(['show']);
Route::controller(FrontendController::class)->group(function ()
{
    Route::get('/', 'index')->name('index');
    Route::get('/about-us', 'AboutUs')->name('about-us');
    Route::get('/submit-a-property', 'SubmitPropery')->name('property.submit');
    // Route::get('/services', 'Services')->name('services');
    // Route::get('/service-detail', 'ServiceDetails')->name('index');
    Route::get('/faq', 'Faq')->name('faq');
    // Route::get('/our-team', 'Team')->name('our-team');
    // Route::get('/pricing', 'Pricing')->name('pricing');
    Route::get('/contact', 'Contact')->name('contact');
    Route::post('/contact', 'SaveContact')->name('contact.store');
});

require __DIR__.'/auth.php';



Route::middleware(['auth:admin_guard'])->group(function () {
    Route::controller(AdminController::class)->group(function (){
        Route::get('/admin/dashboard', 'admin_dashboard')->name('admin.dashboard');
        Route::get('/Contact/update', 'UpdateContact')->name('Contact.update');

        
        Route::get('/Settings/logo', 'UpdateHeaderLogo')->name('Settings.logo');
        Route::post('/Settings/logo', 'StoreHeaderLogo')->name('heder.store');
        Route::post('/Settings/footer', 'StoreFooterLogo')->name('footerlogo.store');
        Route::post('/Settings/favicon', 'storeFavicon')->name('favicon.store');
    });

    
    Route::controller(UsersController::class)->group(function (){
        Route::get('User/block/{id}', 'BlockUser')->name('User.block');
        Route::get('User/activate/{id}', 'ActivateUser')->name('User.activate');
        // Route::get('Payments/{id}', 'Show')->name('payments.show');
        // Route::get('Payments/query/{id}', 'QueryPmt')->name('payments.query');
    });

    // // Users
    Route::resource('Users', UsersController::class)->only([
        'index' //, 'store', 'update', 'destroy'
    ]);

    Route::resource('Review', ReviewController::class);
    Route::resource('Plans', PlansController::class);

    Route::controller(DepositController::class)->group(function (){
        Route::get('/Deposits', 'UserDepo')->name('Users.deposits');
    });
    Route::resource('Deposit', DepositController::class)->only([
        'update', 'destroy', 'show', 'edit'
    ]);

    Route::get('admin/profile', [ProfileController::class, 'editAdmin'])->name('admin.edit');
    Route::patch('admin/profile', [ProfileController::class, 'updateAdmin'])->name('admin.update');
    Route::patch('admin/pass', [ProfileController::class, 'updateAdminPass'])->name('admin.pass');
});
require __DIR__.'/adminauth.php';
