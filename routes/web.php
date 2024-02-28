<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::redirect('/', '/dashboard');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');
Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
Route::get('/slider/store', [SliderController::class, 'store'])->name('slider.store');