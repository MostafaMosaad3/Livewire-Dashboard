<?php

use App\Http\Controllers\ProfileController;
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

Route::prefix('/')->name('front.')->group(function () {
    //=================================================index page
    Route::view('','front.index')->name('index');
    //=================================================about page
    Route::view('about','front.about')->name('about');
    //=================================================contact page
    Route::view('contact','front.contact')->name('contact');
    //=================================================projects page
    Route::view('projects','front.projects')->name('projects');
    //=================================================services page
    Route::view('services','front.services')->name('services');
    //=================================================teams page
    Route::view('team','front.teams')->name('team');
    //=================================================testimonials page
    Route::view('testimonials','front.testimonials')->name('testimonials');
});

Route::prefix('/admin/')->name('admin.')->group(function () {
    //=================================================index page
    Route::view('','admin.index')->name('index');
    //=================================================login page
    Route::view('login','admin.auth.login')->name('login');
});

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';
