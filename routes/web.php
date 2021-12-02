<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
App\Http\Controllers\SessionPreferences::routes();

Route::prefix('demo')->group(function () {
    App\Http\Controllers\Admin\DemoDashboardController::routes();
});

Route::get('/', function() {
    return redirect()->route('demo_dashboard');
});

Route::get('/home',     [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout',   [LoginController::class, 'logout'])->middleware('auth');

Route::group([
    'prefix' => 'painel',
    'middleware' => 'auth',
], function () {
    App\Http\Controllers\Admin\PainelController::routes();
    App\Http\Controllers\Admin\ChamadosController::routes();
});
