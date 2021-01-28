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

Route::get("/aa",function(){
    return \App\Hype\FilmWeb::getMovies('Matrix');
});


Route::any('/logout', function () {
    Auth::logout();
    return redirect()->route('home.index');
})->name('logout');

Auth::routes();



Route::namespace('Home')->name('home.')->group(function () {

    Route::get('/', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('index');
    Route::get('/movies', [App\Http\Controllers\Home\MoviesController::class, 'index'])->name('movies.index');
    Route::post('/movies/{page}', [App\Http\Controllers\Home\MoviesController::class, 'getMovies'])->name('movies.post');
    Route::get('/series', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('series.index');
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [App\Http\Controllers\Home\IndexController::class, 'index'])->name('profile.index');
    });

});
Route::group(['middleware' => ['admin']], function () {

    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('index');
    });
});

