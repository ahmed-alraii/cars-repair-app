<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\BillTypeController;
use App\Http\Controllers\BuyCarController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ClientCarController;
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', app()->getLocale());

Route::group(['prefix' => '{language}' ,'middleware' => 'auth'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/mark_all_read', [OrderController::class, 'markAllAsRead'])->name('mark_all_read');
    Route::get('/bill_report', [ReportController::class, 'billReport'])->name('bill_report');
    Route::post('/bill_report', [ReportController::class, 'generateBillReport'])->name('generate_bill_report');
    Route::get('/bill_export', [ReportController::class, 'billExport'])->name('bill_export');

    Route::resource('/users', UserController::class);
    Route::resource('/_cars', CarController::class);
    Route::resource('/cars_clients', ClientCarController::class);
    Route::resource('/buy_cars', BuyCarController::class);
    Route::resource('/containers', ContainerController::class);
    Route::resource('/bills', BillController::class);
    Route::resource('/bill_types', BillTypeController::class);


});

Route::group(['prefix' => '{language}'], function () {

//    Route::middleware('auth')->group(function () {
//        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//    });

    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('welcome');
    require __DIR__ . '/auth.php';
});


