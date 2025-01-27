<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return view('auth.login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::controller(KaryawanController::class)->prefix('karyawans')->group(function () {
        Route::get('', 'index')->name('karyawans');
        Route::get('create', 'create')->name('karyawans.create');
        Route::post('store', 'store')->name('karyawans.store');
        Route::get('show/{id}', 'show')->name('karyawans.show');
        Route::get('edit/{id}', 'edit')->name('karyawans.edit');
        Route::put('edit/{id}', 'update')->name('karyawans.update');
        Route::delete('destroy/{id}', 'destroy')->name('karyawans.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
