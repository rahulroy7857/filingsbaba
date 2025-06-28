<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProprietorshipController;
use App\Http\Controllers\GstController;
use App\Http\Controllers\TrademarkController;

//use App\Http\Controllers\ServiceController;
// use App\Http\Controllers\FssaiController;
// use App\Http\Controllers\TrademarkController;
// use App\Http\Controllers\CompanyController;
// use App\Http\Controllers\TaxController;
// Route::get('/', function () {
//     return view('layouts.index');
// });

Route::get('/',[HomeController::class,'index'])->name('Home');

Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::prefix('startup')->name('startup.')->group(function () {
    Route::get('/proprietorship', [ProprietorshipController::class, 'proprietorship_index'])->name('proprietorship');
    Route::get('/partnership', [ProprietorshipController::class, 'partnership'])->name('partnership');
    Route::get('/one-person-company', [ProprietorshipController::class, 'onePersonCompany'])->name('one-person-company');    
    Route::get('/limited-liability-partnership', [ProprietorshipController::class, 'limitedLiabilityLPartnership'])->name('limited-liability-partnership');    
    Route::get('/private-limited-company', [ProprietorshipController::class, 'privateLimitedCompany'])->name('private-limited-company');
    
});
//Route::get('/proprietorship', [ProprietorshipController::class, 'proprietorship_index'])->name('proprietorship');


// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// GST Services Routes
Route::prefix('gst')->name('gst.')->group(function () {
    Route::get('/', [GstController::class, 'index'])->name('index');    
    Route::get('/registration', [GstController::class, 'gstregistration'])->name('gstregistration');
    Route::get('/filings', [GstController::class, 'gstfilings'])->name('gstfilings');
    Route::get('/cancellation', [GstController::class, 'gstcancellation'])->name('gstcancellation');
   
});

// Trademark Services Routes
Route::prefix('trademark')->name('trademark.')->group(function () {
    Route::get('/', [TrademarkController::class, 'index'])->name('index');    
    Route::get('/registration', [TrademarkController::class, 'trademarkregistration'])->name('registration');
    Route::get('/objection', [TrademarkController::class, 'trademarkobjection'])->name('objection');
    Route::get('/opposition', [TrademarkController::class, 'trademarkopposition'])->name('opposition');
    Route::get('/certificate', [TrademarkController::class, 'trademarkcertificate'])->name('certificate');
    Route::get('/hearing', [TrademarkController::class, 'trademarkhearing'])->name('hearing');
    Route::get('/renewal', [TrademarkController::class, 'trademarkrenewal'])->name('renewal');
});

