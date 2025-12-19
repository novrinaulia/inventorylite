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

// Public route
Route::get('/', function () {
    return view('welcome');
});

// Authenticated routes
Route::middleware('auth')->group(function () {
    // Admin Routes
    Route::prefix('admin')
    ->middleware('role:admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');
    });

    // Staff Routes
    Route::prefix('staff')
    ->middleware('role:staff')
    ->name('staff.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('staff.dashboard');
        })->name('dashboard');
    });
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
