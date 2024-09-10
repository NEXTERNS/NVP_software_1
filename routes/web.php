<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExpenditureController;
use App\Http\Controllers\CropperController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ProductsalesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');







Route::get('/reciepe', function () {
    return view('products.reciepe');
})->middleware(['auth', 'verified'])->name('reciepe');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile-change-passwprd', [ProfileController::class, 'change'])->name('profile.partials.update-password-form');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductsController::class);
    Route::resource('cropper', CropperController::class);
    Route::resource('analytics', AnalyticsController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('expenditure', ExpenditureController::class);
    Route::resource('productsales', ProductsalesController::class);







    //other routes
    Route::get('/table', [ProductsController::class, 'table'])->name('products.table');
    Route::get('/Saleshistory', [ProductsalesController::class, 'history'])->name('productsales.showsaleshistory');




    
});

require __DIR__.'/auth.php';
