<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExhibitionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkController;
use function Pest\Laravel\get;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/', function () {
        return view('layouts.front.layouts');
    })->name('home');

    Route::get('/eserler', [WorkController::class, 'index'])->name('works');

    Route::get('/sanatcilar', [ArtistController::class, 'index'])->name('artist');

    Route::get('/muzayedeler', [AuctionController::class, 'index'])->name('auction');

    Route::get('/sergiler', [ExhibitionController::class, 'index'])->name('sergi');

    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    Route::get('/hakkimizda', function () {
        return view('layouts.sayfalar.hakkimizda');
    })->name('hakkimizda');

    Route::get('/iletisim', [ContactController::class, 'index'])->name('iletisim');
    Route::get('/sepet', function () {
        return view('sepet');
    })->name('sepet');

    Route::get('/kullanici', function () {
        return view('profil');
    })->name('kullanici');


});

require __DIR__ . '/auth.php';
