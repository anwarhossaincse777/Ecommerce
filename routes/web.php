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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('welcome');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::prefix('admin')->middleware('can:admin-login')->group(function (){
    Route::get('panel','\App\Http\Controllers\HomeController@admin')->name('admin-panel');
    Route::resource('page','\App\Http\Controllers\PageController');
    Route::resource('category','\App\Http\Controllers\CategoryController');
    Route::resource('product','\App\Http\Controllers\ProductController');

});





