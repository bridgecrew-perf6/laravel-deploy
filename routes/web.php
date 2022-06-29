<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('home');
});

// grouped routes by controller
Route::controller(PostController::class)->prefix('/posts')->group(
    function () {
        Route::get('/{id?}', 'show')->name('posts.show');
        Route::get('/add/new',  function () {
            return view('add');
        })->name('posts.add');
        Route::post('/create', 'store')->name('posts.store');
        Route::get('/search/{query?}/{filter?}', 'search')->name('posts.search');
        Route::put('/{id}', 'update')->name('posts.update');
        Route::delete('/{id}', 'delete')->name('posts.delete');
    }
);

Route::resource('products', ProductController::class);
