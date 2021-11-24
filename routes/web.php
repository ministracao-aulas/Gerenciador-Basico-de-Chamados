<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/', function() {
    return redirect()->route('demo_dashboard');
});
Route::prefix('demo')->group(function () {
    App\Http\Controllers\Admin\DemoDashboardController::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
