<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProprietorshipController;
use App\Http\Controllers\GstController;

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
    Route::get('/registration', [GstController::class, 'registration'])->name('registration');
    Route::get('/filing', [GstController::class, 'filing'])->name('filing');
    Route::get('/cancellation', [GstController::class, 'cancellation'])->name('cancellation');
    Route::get('/renewal', [GstController::class, 'renewal'])->name('renewal');
    Route::get('/amendment', [GstController::class, 'amendment'])->name('amendment');
});

// FSSAI Services Routes
Route::prefix('fssai')->name('fssai.')->group(function () {
    Route::get('/', [FssaiController::class, 'index'])->name('index');
    Route::get('/registration', [FssaiController::class, 'registration'])->name('registration');
    Route::get('/renewal', [FssaiController::class, 'renewal'])->name('renewal');
    Route::get('/modification', [FssaiController::class, 'modification'])->name('modification');
    Route::get('/license', [FssaiController::class, 'license'])->name('license');
});

// Trademark Services Routes
Route::prefix('trademark')->name('trademark.')->group(function () {
    Route::get('/', [TrademarkController::class, 'index'])->name('index');
    Route::get('/registration', [TrademarkController::class, 'registration'])->name('registration');
    Route::get('/renewal', [TrademarkController::class, 'renewal'])->name('renewal');
    Route::get('/objection', [TrademarkController::class, 'objection'])->name('objection');
    Route::get('/opposition', [TrademarkController::class, 'opposition'])->name('opposition');
    Route::get('/assignment', [TrademarkController::class, 'assignment'])->name('assignment');
    Route::get('/series', [TrademarkController::class, 'series'])->name('series');
    Route::get('/copyright', [TrademarkController::class, 'copyright'])->name('copyright');
});

// Company Registration Routes
Route::prefix('company')->name('company.')->group(function () {
    Route::get('/', [CompanyController::class, 'index'])->name('index');
    Route::get('/registration', [CompanyController::class, 'registration'])->name('registration');
    Route::get('/private-limited', [CompanyController::class, 'privateLimited'])->name('private-limited');
    Route::get('/public-limited', [CompanyController::class, 'publicLimited'])->name('public-limited');
    Route::get('/llp', [CompanyController::class, 'llp'])->name('llp');
    Route::get('/partnership', [CompanyController::class, 'partnership'])->name('partnership');
    Route::get('/proprietorship', [CompanyController::class, 'proprietorship'])->name('proprietorship');
});

// Tax Services Routes
Route::prefix('tax')->name('tax.')->group(function () {
    Route::get('/', [TaxController::class, 'index'])->name('index');
    Route::get('/e-filing', [TaxController::class, 'eFiling'])->name('e-filing');
    Route::get('/business-tax', [TaxController::class, 'businessTax'])->name('business-tax');
    Route::get('/itr-1', [TaxController::class, 'itr1'])->name('itr1');
    Route::get('/itr-2', [TaxController::class, 'itr2'])->name('itr2');
    Route::get('/itr-3', [TaxController::class, 'itr3'])->name('itr3');
    Route::get('/itr-4', [TaxController::class, 'itr4'])->name('itr4');
    Route::get('/itr-5', [TaxController::class, 'itr5'])->name('itr5');
    Route::get('/itr-6', [TaxController::class, 'itr6'])->name('itr6');
    Route::get('/itr-7', [TaxController::class, 'itr7'])->name('itr7');
    Route::get('/15ca-15cb', [TaxController::class, 'ca15cb'])->name('ca15cb');
    Route::get('/tds', [TaxController::class, 'tds'])->name('tds');
    Route::get('/notice', [TaxController::class, 'notice'])->name('notice');
});