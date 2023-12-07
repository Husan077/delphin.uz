<?php

use App\Http\Controllers\Site\ClickController;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\AboutusController;
use App\Http\Controllers\Site\ContactController;

use \App\Http\Controllers\Admin\AdminController;
use \App\Http\Controllers\Admin\BannersController;
use App\Http\Controllers\Admin\BeautifuladdresController;
use App\Http\Controllers\Admin\CustomerfeedbackController;
use App\Http\Controllers\Admin\CustomerimagesController;
use App\Http\Controllers\Admin\FaqsController as AdminFaqsController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\OurcompanyController;
use App\Http\Controllers\Admin\ResultsController;
use \App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TripsdetailsController;
use App\Http\Controllers\Admin\WhyusController;
use App\Http\Controllers\Site\FaqsController;
use App\Http\Controllers\Site\TripsController;
use App\Http\Controllers\Admin\ClickTransUserController;
use Illuminate\Support\Facades\Redirect;
use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function (){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus');
    Route::get('/trips', [TripsController::class, 'index'])->name('trips');
    Route::get('/trips/{slug}', [TripsController::class, 'detail'])->name('tripsDetail');

//    Route::post('trips/payment', [TripsController::class, 'clickSend'])->name('clickSend');

    Route::get('/contact', [ContactController::class, 'index'])->name('cantact');
    Route::get('/faqs', [FaqsController::class, 'index'])->name('faqs');
});

require __DIR__.'/auth.php';


//Route::middleware('clickSignString')->group(function () {
//    Route::post('/click-prepare', [ClickController::class, 'prepare'])->withoutMiddleware([VerifyCsrfToken::class]);
//    Route::post('/click-complete', [ClickController::class, 'complete'])->withoutMiddleware([VerifyCsrfToken::class]);
//});

Route::post('/contact/sendToTg', [HomeController::class, 'sendToTg'])->name('contact.send');
Route::post('/contact/sendTg', [HomeController::class, 'sendTg'])->name('contact.send2');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::resources([
        'admin/banners' => BannersController::class,
        'admin/beautifuladdres'  => BeautifuladdresController::class,
        'admin/customerfeedbacks'  => CustomerfeedbackController::class,
        'admin/customerimages' => CustomerimagesController::class,
        'admin/results' => ResultsController::class,
        'admin/trips' => TripsController::class,
        'admin/settings' => SettingsController::class,
        'admin/tripsdetails' => TripsdetailsController::class,
        'admin/faqs' => AdminFaqsController::class,
        'admin/ourcompanys' => OurcompanyController::class,
        'admin/whyus' => WhyusController::class,
        'admin/locations' => LocationController::class,
        'admin/click' => ClickTransUserController::class,
    ]);
    Route::post('/admin/tripsdetails/upload', [TripsdetailsController::class, 'upload'])->name('admin.tripsdetails.upload');
    Route::post('/admin/ourcompanys/upload', [OurcompanyController::class, 'upload'])->name('admin.ourcompanys.upload');
    Route::post('/admin/whyus/upload', [WhyusController::class, 'upload'])->name('admin.whyus.upload');
    Route::post('/admin/faqs/upload', [AdminFaqsController::class, 'upload'])->name('admin.faqs.upload');

});
