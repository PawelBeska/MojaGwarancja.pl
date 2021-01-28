<?php

use Illuminate\Support\Facades\Route;

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

Route::any('/logout', function () {
    Auth::logout();
    return redirect()->route('home.index');
})->name('logout');


Auth::routes();



Route::namespace('Home')->name('home.')->group(function () {

    Route::get('/', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('index');
    Route::get('/cennik', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('price-list.index');
    Route::get('/o-nas', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('about-us.index');
    Route::get('/regulamin', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('regulations.index');

    Route::get('/faq', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('faq.index');
    Route::get('/profil', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('profile.index');

    Route::get('/ustawienia', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('settings.index');

    Route::get('/gwarancje', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('guarantees.index');

    Route::get('/naprawa-wlasna', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('own-repair.index');

    Route::get('/wiadomosci', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('messages.index');

});
