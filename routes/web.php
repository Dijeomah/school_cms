<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\IntroductionController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SiteBrandingController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Admin\TeachersController;
use App\Http\Controllers\Admin\TestimonialsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('admin/', [HomeController::class, 'index'])->name('admin')->middleware(['auth']);

// profile route
Route::resource('admin/profile', ProfileController::class)->middleware(['auth']);

// site branding route
Route::resource('admin/site-branding', SiteBrandingController::class)->middleware(['auth']);

// sliders route
Route::resource('admin/sliders', SlidersController::class)->middleware(['auth']);

// introduction route
Route::resource('admin/introduction', IntroductionController::class)->middleware(['auth']);

// teachers route
Route::resource('admin/teachers', TeachersController::class)->middleware(['auth']);

// testimonials route
Route::resource('admin/testimonials', TestimonialsController::class)->middleware(['auth']);

// events route
Route::resource('admin/events', EventsController::class)->middleware(['auth']);

// about route
Route::resource('admin/about', AboutController::class)->middleware(['auth']);

// admission route
Route::resource('admin/admission', AdmissionController::class)->middleware(['auth']);

// gallery route
Route::resource('admin/gallery', GalleryController::class)->middleware(['auth']);