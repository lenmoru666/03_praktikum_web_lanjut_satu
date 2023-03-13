<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengalamanKuliahController;

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

// Halaman Home (Route Biasa)
Route::get('home', function () {
    return view('home');
});


// Halaman About Us (Route Biasa)
Route::get('about-us', function () {
    return view('about-us');
});


// Halaman Products (Route Prefix)
Route::prefix('products')->group(function(){
    Route::get('category/marbel-edu-games',function(){
        return view('product1');
    });

    Route::get('category/marbel-and-friends-kids-games',function(){
        return view('product2');
    });

    Route::get('category/riri-story-books',function(){
        return view('product3');
    });
});


// Halaman Programs (Route Prefix)
Route::prefix('programs')->group(function(){
    Route::get('karir',function(){
        return view('program1');
    });

    Route::get('magang',function(){
        return view('program2');
    });
});


// Halaman Contact Us (Route Resources)
Route::resource('contact-us', ContactController::class)->only([
    'index',
    'form'
]);


// Halaman News (Route Param)
Route::get('news/{id}', function ($id) {
    return view('news');
});


// Halaman Dashboard
Route::get('dashboard', [HomeController::class, 'index'])->name('homepage');


// Halaman Profile
Route::get('profile', [ProfileController::class, 'index'])->name('profile');


// Halaman Pengalaman Kuliah
Route::get('pengalaman', [PengalamanController::class, 'index'])->name('pengalaman-kuliah');
