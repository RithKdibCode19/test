<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdminController,
    CategoryController,
    CustomerController,
    FoodController,
    OrderController,
    PaymentController,
    ReportController,
    UserController
};



// Admin
Route::prefix('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
});

// User
Route::prefix('user')->group(function () {
    Route::get('/list', [UserController::class, 'list'])->name('user.list');
});

// Customer
Route::prefix('customer')->group(function () {
    Route::get('/list', [CustomerController::class, 'list'])->name('customer.list');
});

// Category
Route::prefix('category')->group(function () {
    Route::get('/list', [CategoryController::class, 'list'])->name('category.list');
});

// Food
Route::prefix('food')->group(function () {
    Route::get('/list', [FoodController::class, 'list'])->name('food.list');
});

// Order
Route::prefix('order')->group(function () {
    Route::get('/list', [OrderController::class, 'list'])->name('order.list');
});

// Payment
Route::prefix('payment')->group(function () {
    Route::get('/list', [PaymentController::class, 'list'])->name('payment.list');
});

// Report
Route::prefix('report')->group(function () {
    Route::get('/list', [ReportController::class, 'list'])->name('report.list');
});
