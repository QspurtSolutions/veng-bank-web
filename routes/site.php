<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\FrBlogController;
use App\Http\Controllers\FrcareerController;
use App\Http\Controllers\FrClientController;
use App\Http\Controllers\FrIndustriesController;
use App\Http\Controllers\FrServiceController;
use App\Http\Controllers\FrTechnologiesController;
use App\Http\Controllers\FrWorkController;



use App\Http\Controllers\FrmanagementController;
use App\Http\Controllers\FrbranchController;
use App\Http\Controllers\frGalleryController;



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
    return view('index');
});

// Route::get('index', function () {
//     return view('index');
// });


Route::get('branch', [FrbranchController::class, 'branch']);






Route::get('deposit', function () {
    return view('deposit');
});

Route::get('download', function () {
    return view('download');
});






Route::get('loan', function () {
    return view('loan');
});


Route::get('management', [FrmanagementController::class, 'management']);
Route::get('gallery', [frGalleryController::class,'gallery']);




Route::get('/index', [Controller::class, 'index']);
Route::get('index', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});

Route::get('works', [FrWorkController::class, 'works']);
Route::get('/worksdetails/{slug?}', [FrWorkController::class, 'worksdetails'])->name('worksdetails');

Route::get('serviemenu', [FrServiceController::class, 'serviemenu']);

Route::get('service', [FrServiceController::class, 'service']);
Route::get('/servicedetails/{slug?}', [FrServiceController::class, 'servicedetails'])->name('servicedetails');

Route::get('technologies',  [FrTechnologiesController::class, 'technologies']);
Route::get('/technologiesdetails/{slug?}', [FrTechnologiesController::class, 'technologiesdetails'])->name('technologiesdetails');
Route::get('industries', [FrIndustriesController::class, 'industries']);
Route::get('/industriesdetails/{slug?}', [FrIndustriesController::class, 'industriesdetails'])->name('industriesdetails');
Route::get('career',  [FrCareerController::class, 'career']);
Route::get('clients', [FrClientController::class, 'clients']);
Route::get('blog', [FrBlogController::class, 'blog']);
Route::get('/blogdetails/{slug?}', [FrBlogController::class, 'blogdetails'])->name('blogdetails');
Route::get('/contact', [ContactFormController::class, 'contact']);
Route::post('/contact', [ContactFormController::class, 'storeContactForm'])->name('contact.store');
Route::get('skillset', function () {
    return view('skillset');
});
Route::get('contact_us', function () {
    return view('contact_us');
});