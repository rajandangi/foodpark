<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the ['web', 'auth', 'role:admin'] middleware group. 
| In Simple terms, all the routes in this file can't be accessed without being logged in as an admin.
|
*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // All the admin routes will be admin/path.and name will be admin.name
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    /*
    | Profile Routes
    |-----------
     */
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile', [ProfileController::class, 'updateProfile'])->name('profile.update');

    Route::put('profile/password', [ProfileController::class, 'updatePassword'])->name('password.update');
});

