<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProprietorshipController;
use App\Http\Controllers\GstController;
use App\Http\Controllers\TrademarkController;
use App\Http\Controllers\FssaiController;
use App\Http\Controllers\ComplianceController;

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
    //Route::get('/registration', [TrademarkController::class, 'trademarkregistration'])->name('registration');
    Route::get('/objection', [TrademarkController::class, 'trademarkobjection'])->name('objection');
    Route::get('/opposition', [TrademarkController::class, 'trademarkopposition'])->name('opposition');
    Route::get('/certificate', [TrademarkController::class, 'trademarkcertificate'])->name('certificate');
    Route::get('/hearing', [TrademarkController::class, 'trademarkhearing'])->name('hearing');
    Route::get('/renewal', [TrademarkController::class, 'trademarkrenewal'])->name('renewal');
});

// FSSAI Services Routes
Route::prefix('fssai')->name('fssai.')->group(function () {
    Route::get('/', [FssaiController::class, 'index'])->name('index');    
    Route::get('/registration', [FssaiController::class, 'fssairegistration'])->name('registration');
    Route::get('/renewal', [FssaiController::class, 'fssairenewal'])->name('renewal');
    Route::get('/modification', [FssaiController::class, 'fssaimodification'])->name('modification');
});

// Compliance Services Routes
Route::prefix('compliance')->name('compliance.')->group(function () {
    Route::get('/', [ComplianceController::class, 'index'])->name('index');    
    Route::get('/company-compliance', [ComplianceController::class, 'companyCompliance'])->name('company-compliance');
    Route::get('/llp-compliance', [ComplianceController::class, 'llpCompliance'])->name('llp-compliance');
    Route::get('/opc-compliance', [ComplianceController::class, 'opcCompliance'])->name('opc-compliance');
    Route::get('/name-change-company', [ComplianceController::class, 'nameChangeCompany'])->name('name-change-company');
    Route::get('/registered-office-change', [ComplianceController::class, 'registeredOfficeChange'])->name('registered-office-change');
    Route::get('/din-ekyc-filing', [ComplianceController::class, 'dinEkycFiling'])->name('din-ekyc-filing');
    Route::get('/din-reactivation', [ComplianceController::class, 'dinReactivation'])->name('din-reactivation');
    Route::get('/director-change', [ComplianceController::class, 'directorChange'])->name('director-change');
    Route::get('/remove-director', [ComplianceController::class, 'removeDirector'])->name('remove-director');
    Route::get('/adt1-filing', [ComplianceController::class, 'adt1Filing'])->name('adt1-filing');
    Route::get('/dpt3-filing', [ComplianceController::class, 'dpt3Filing'])->name('dpt3-filing');
    Route::get('/llp-form11-filing', [ComplianceController::class, 'llpForm11Filing'])->name('llp-form11-filing');
    Route::get('/dormant-status-filing', [ComplianceController::class, 'dormantStatusFiling'])->name('dormant-status-filing');
    Route::get('/moa-amendment', [ComplianceController::class, 'moaAmendment'])->name('moa-amendment');
    Route::get('/aoa-amendment', [ComplianceController::class, 'aoaAmendment'])->name('aoa-amendment');
    Route::get('/authorized-capital-increase', [ComplianceController::class, 'authorizedCapitalIncrease'])->name('authorized-capital-increase');
    Route::get('/share-transfer', [ComplianceController::class, 'shareTransfer'])->name('share-transfer');
    Route::get('/demat-of-shares', [ComplianceController::class, 'dematOfShares'])->name('demat-of-shares');
    Route::get('/winding-up-llp', [ComplianceController::class, 'windingUpLlp'])->name('winding-up-llp');
    Route::get('/winding-up-company', [ComplianceController::class, 'windingUpCompany'])->name('winding-up-company');
});

