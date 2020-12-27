<?php


use App\Http\Controllers\Admin\OptionController;
use App\Models\Option;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ServiceController;

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
    return view('frontend.index')->with('data', Option::find(1));
});


Route::group(['prefix' => 'admin'], function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');



    Route::resource('/settings', OptionController::class);

    Route::resource('/page', PageController::class);
    Route::resource('/post', PostController::class);
    Route::resource('/service', ServiceController::class);
    Route::resource('/portfolio', PortfolioController::class);

    Route::get('/file-manager/', function () {
        return view('admin.file_manager');
    })->name('admin.file-manager');

});

require __DIR__.'/auth.php';
