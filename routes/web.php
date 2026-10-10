<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\ExchangeController;
use App\Http\Controllers\Admin\TripController as AdminTripController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\DestinationController as UserDestinationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::controller(FrontEndController::class)->group(function () {
    Route::get("/", "index")->name("Frontend.Index");
    Route::get('about', 'About')->name('Frontend.About');
    Route::get('contact', 'Contact')->name('Frontend.Contact');
    Route::get('privacy-policy', 'Faq')->name('Frontend.FAQ');
});

Route::get('/login', [AuthController::class, 'getLoginPage'])->name('Auth.login');
Route::get('/register', [AuthController::class, 'getRegisterPage'])->name('Auth.register');
Route::get('logout', [AuthController::class, 'logoutUser'])->name('Auth.Logout');


// User Routes
Route::prefix('/')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'getDashboardPage'])->name('pages.dashboard');

    Route::prefix('trips')->group(function () {
        Route::get('/', [TripController::class, 'getTripsPage'])->name('pages.trips');
        Route::get('add', [TripController::class, 'getTipAddPage'])->name('pages.add.trip');
        Route::get('edit/{id}', [TripController::class, 'getTripEditPage'])->name('page.edit.trip');
        Route::get('trip/{id}', [TripController::class, 'getTripDetails'])->name('Pages.TripeDetails');
    });


    Route::prefix('expense')->group(function () {
        Route::get('/', [ExpenseController::class, 'getExpensePage'])->name('pages.expense');
        Route::get('log', [ExpenseController::class, 'getExpenseLogPage'])->name('Pages.ExpenseLog');
        Route::prefix('slip')->group(function () {
            Route::get('{id}', [ExpenseController::class, 'getSlipPage'])->name('Pages.ExpenseSlip');
            Route::get('edit/{id}', [ExpenseController::class, 'getSlipEditPage'])->name('Pages.EditSlip');
        });
    });

    Route::prefix('destination')->group(function () {
        Route::get('all', [UserDestinationController::class, 'getDestinationPage'])->name('Pages.Destination');
        Route::get('add', [UserDestinationController::class, 'getAddDesitnationPage'])->name('Pages.AddDestination');
        Route::get('edit/{id}', [UserDestinationController::class, 'GetUserDetinationEditPage'])->name('Pages.EditDestination');
        Route::get('view/{id}', [UserDestinationController::class, 'GetUserDetinationViewPage'])->name('Pages.ViewDestination');
    });

    Route::get('profile', [AuthController::class, 'getProfilePage'])->name('Auth.Profile');

    Route::get('notifications', [NotificationController::class, 'getNotificationPage'])->name('Auth.Notification');

    Route::get('search', [SearchController::class, 'getSearchPage'])->name('Page.Search');
});



// Admin Routes
Route::prefix('admin')->group(function () {

    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('Admin.Dashboard');

    Route::prefix('destinations')->group(function () {
        Route::get('/', [DestinationController::class, 'getDestinationPage'])->name('Admin.Destination');
        Route::get('add', [DestinationController::class, 'getAddDestinationPage'])->name('Admin.Add.Destination');
    });

    Route::prefix('trips')->group(function () {
        Route::get('all', [AdminTripController::class, 'getAllTripsPage'])->name('Admin.Trip');
    });

    Route::prefix('exchange')->group(function () {
        Route::get('rates', [ExchangeController::class, 'index'])->name('Admin.Exchange');
        Route::get('add', [ExchangeController::class, 'getExchangeAddPage'])->name('Admin.ExchangeAdd');
    });

    Route::prefix('users')->group(function () {
        Route::get('all', [UserController::class, 'index'])->name('Admin.Users');
        Route::get('add', [UserController::class, 'addUser'])->name('Admin.AddUser');
    });
});





// Post Requests
Route::prefix('api/v1')->group(function () {
    Route::prefix('user')->group(function () {
        Route::post('register', [AuthController::class, 'RegisterUser'])->name('Auth.Post.Register');
        Route::post('login', [AuthController::class, 'LoginUser'])->name('Auth.Post.Login');
        Route::post('update', [AuthController::class, 'UpdateUserProfile'])->name('Auth.Post.Update.Profile');
        Route::post('upload-profile-picture', [AuthController::class, 'UploadProfilePicture'])->name('Auth.Post.UploadProfilePicture');
        Route::post('upload-banner-image', [AuthController::class, 'UploadBannerImage'])->name('Auth.Post.UploadBannerImage');
    });

    Route::prefix('notification')->group(function () {
        Route::post('notify', [NotificationController::class, 'NotificationReed'])->name('Notification.Post');
    });

    Route::prefix('trip')->group(function () {
        Route::post('add', [TripController::class, 'AddTrip'])->name('Trip.Post.Add');
        Route::post('edit', [TripController::class, 'EditTrip'])->name('Trip.Post.Edit');
        Route::post('mark-as-completed/{id}', [TripController::class, 'MarkAsCompleted'])->name('Trip.Post.MarkAsCompleted');
        Route::post('mark-as-active/{id}', [TripController::class, 'MarkAsActive'])->name('Trip.Post.MarkAsActive');
        Route::post('delete/{id}', [TripController::class, 'DeleteTrip'])->name('Trip.Delete');
        Route::post('filter', [TripController::class, 'getFilteredData'])->name('Trip.Filter');
    });

    Route::prefix('expense')->group(function () {
        Route::post('log', [ExpenseController::class, 'logExpenses'])->name('Expense.Log');
        Route::post('delete', [ExpenseController::class, 'deleteSlip'])->name('Pages.DeleteSlip');
        Route::post('update', [ExpenseController::class, 'updateSlip'])->name('UpdateSlip.Post');
    });



    Route::prefix('destination')->group(function () {
        Route::post('add', [UserDestinationController::class, 'AddDestination'])->name('Auth.Post.Add.Destination');
        Route::post('update', [UserDestinationController::class, 'UpdateDestinationData'])->name('Auth.Post.Update.DestinationData');
    });

    Route::prefix('admin')->group(function () {
        Route::prefix('destination')->group(function () {
            Route::post('add', [DestinationController::class, 'AddDestination'])->name('Add.Destination.Post');
        });

        Route::prefix('exchange')->group(function () {
            Route::post('add', [ExchangeController::class, 'addCurrency'])->name('Currency.Add');
        });

        Route::prefix('user')->group(function () {
            Route::post('add', [UserController::class, 'AddUserPost'])->name('Post.AddUser');
        });
    });
});
