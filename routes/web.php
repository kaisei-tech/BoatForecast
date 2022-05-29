<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', function () {
    return view('top');
});
Route::get('hello',function () {
    return '<html><body><h1>Hello</h1><p>This is sample page.
        </p></body><html>';
});
Auth::routes();

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/index', [App\Http\Controllers\ForecastController::class, 'index'])->name('index');
Route::post('/delete/{id}/', [App\Http\Controllers\ForecastController::class, 'delete'])->name('delete');
Route::get('/create', [App\Http\Controllers\ForecastController::class, 'create'])->name('create');
Route::get('/edit/{id}', [App\Http\Controllers\ForecastController::class, 'edit'])->name('edit');
Route::get('/browse/{id}', [App\Http\Controllers\ForecastController::class, 'browse'])->name('browse');
Route::post('/browse', [App\Http\Controllers\ForecastController::class, 'store'])->name('browse.store');
Route::post('/browse_update', [App\Http\Controllers\ForecastController::class, 'update'])->name('browse_update.update');



