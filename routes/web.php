<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/user/Ripcheck');
});
Route::get('/home', function () {
    return redirect('/user/Ripcheck');
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth']], function () {
    // Route::resource('Ripcheck', 'RipcheckController');
    Route::get('/Ripcheck', [App\Http\Controllers\admin\RipcheckController::class, 'index'])->name('Ripcheck.index');
    Route::get('/trusted', [App\Http\Controllers\admin\RipcheckController::class, 'trusted'])->name('Ripcheck.trusted');
    Route::get('/fake', [App\Http\Controllers\admin\RipcheckController::class, 'fake'])->name('Ripcheck.fake');
    Route::get('/search', [App\Http\Controllers\admin\RipcheckController::class, 'search'])->name('Ripcheck.search');
});
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    // Route::resource('Ripcheck', 'RipcheckController');
    Route::get('/Ripcheck', [App\Http\Controllers\admin\RipcheckController::class, 'create'])->name('Ripcheck.create');
    Route::post('/Ripcheck', [App\Http\Controllers\admin\RipcheckController::class, 'store'])->name('Ripcheck.store');
});
