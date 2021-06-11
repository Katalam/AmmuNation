<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InviteCodeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/product', [ProductController::class, 'index'])
    ->middleware(['auth'])
    ->name('product.index');

Route::get('/invite_code', [InviteCodeController::class, 'index'])->middleware(['auth'])->name('invite_code.index');
Route::delete('/invite_code/{invite_code}', [InviteCodeController::class, 'destroy'])->middleware(['auth'])->name('invite_code.destroy');

require __DIR__.'/auth.php';
