<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    // Admin login Route
    Route::match(['get','post'],'login',[AdminController::class,'login']);
    Route::group(['middleware'=>['admin']],function(){
        // Admin Dashboard Route
        Route::get('dashboard',[AdminController::class,'dashboard']);

        // Admin Logout
        Route::get('logout',[AdminController::class,'logout']);
    });
});
