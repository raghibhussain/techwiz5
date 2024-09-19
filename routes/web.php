<?php

use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'getLoginPage'])->name('Auth.login');
Route::get('/register', [AuthController::class, 'getRegisterPage'])->name('Auth.register');

Route::prefix('/')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'getDashboardPage'])->name('pages.dashboard');

    Route::prefix('trips')->group(function () {
        Route::get('/', [TripController::class, 'getTripsPage'])->name('pages.trips');
        Route::get('add', [TripController::class, 'getTipAddPage'])->name('pages.add.trip');
        Route::get('edit/{id}', [TripController::class, 'getTripEditPage'])->name('page.edit.trip');
    });

    Route::prefix('expense')->group(function () {
        Route::get('/', [ExpenseController::class, 'getExpensePage'])->name('pages.expense');
    });

    Route::get('profile', [AuthController::class, 'getProfilePage'])->name('Auth.Profile');
});

Route::prefix('admin')->group(function () {
    Route::prefix('destinations')->group(function () {
        Route::get('/', [DestinationController::class, 'getDestinationPage'])->name('Admin.Destination');
        Route::get('add', [DestinationController::class, 'getAddDestinationPage'])->name('Admin.Add.Destination');
    });
});


Route::prefix('api/v1')->group(function () {
    Route::prefix('user')->group(function () {
        Route::post('register', [AuthController::class, 'RegisterUser'])->name('Auth.Post.Register');
        Route::post('login', [AuthController::class, 'LoginUser'])->name('Auth.Post.Login');
    });

    Route::prefix('trip')->group(function () {
        Route::post('add', [TripController::class, 'AddTrip'])->name('Trip.Post.Add');
    });


    Route::prefix('admin')->group(function () {
        Route::post('add', [DestinationController::class, 'AddDestination'])->name('Add.Destination.Post');
    });
});
