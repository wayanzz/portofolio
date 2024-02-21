<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Welcome\AboutController;
use App\Http\Controllers\Welcome\ContactController;
use App\Http\Controllers\Welcome\HomeController;
use App\Http\Controllers\Welcome\ServicesController;
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

Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('home.index');
    });
    Route::resource('home', HomeController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('about', AboutController::class);
    Route::resource('services', ServicesController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
