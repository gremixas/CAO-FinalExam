<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminCarController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Front\FrontHomeController;
use App\Http\Controllers\Admin\AdminBookingController;
use App\Http\Controllers\Front\FrontBookingController;

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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/front', [FrontHomeController::class, 'index'])->name('home');
Route::get('/front/{car}', [FrontHomeController::class, 'show'])->name('front.cars.show');
Route::get('/bookings', [FrontBookingController::class, 'index'])->middleware(['auth'])->name('front.bookings.home');
Route::get('/bookings/book/{booking}', [FrontBookingController::class, 'book'])->middleware(['auth'])->name('front.bookings.book');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->middleware(['auth', 'is_admin'])->name('admin.')->group(function() {
    Route::get('/', [AdminHomeController::class, 'index'])->name('home');
    Route::resources([
        'users' => AdminUserController::class,
        'cars' => AdminCarController::class,
        'bookings' => AdminBookingController::class,
    ]);
});
