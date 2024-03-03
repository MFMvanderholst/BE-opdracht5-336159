<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockroomController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\SupplierController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('stockroom', StockroomController::class)
    ->only(['index']);

Route::resource('/delivery', DeliveryController::class)
    ->only(['index']);

Route::resource('supplier', SupplierController::class)
    ->only(['index']);
    
Route::get('supplier/{id}', [SupplierController::class, 'show'] );

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
