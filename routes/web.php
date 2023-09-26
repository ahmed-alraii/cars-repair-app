<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\BillTypeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', app()->getLocale());
Route::group(['prefix' => '{language}'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('welcome');

    Route::resource('/users', UserController::class)->middleware('auth');
    Route::resource('/_cars', CarController::class)->middleware('auth');
    Route::resource('/containers', ContainerController::class)->middleware('auth');
    Route::resource('/bills', BillController::class)->middleware('auth');
    Route::resource('/bill_types', BillTypeController::class)->middleware('auth');

    Route::post('/mark_all_read', [OrderController::class, 'markAllAsRead'])->name('mark_all_read')->middleware(['auth']);
    Route::get('/bill_report', [ReportController::class, 'billReport'])->name('bill_report')->middleware(['auth']);
    Route::post('/bill_report', [ReportController::class, 'generateBillReport'])->name('generate_bill_report')->middleware(['auth']);
    Route::get('/bill_export', [ReportController::class, 'billExport'])->name('bill_export')->middleware(['auth']);

//    Route::middleware('auth')->group(function () {
//        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//    });

    require __DIR__ . '/auth.php';
});


