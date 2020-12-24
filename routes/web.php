<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');

    Route::resource('/page', PageController::class);
    Route::resource('/post', PostController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/portfolio', PortfolioController::class);

    Route::get('/file-manager/', function () {
        return view('admin.file_manager');
    })->name('admin.file-manager');

});

require __DIR__.'/auth.php';
