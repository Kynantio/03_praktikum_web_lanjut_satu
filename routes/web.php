<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactUsController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return view('home');
});

Route::prefix('products')->group(function (){
    Route::get('category', function(){
        return view('product');
    });
});

Route::get('news/{title}', function(){
    return view('news');
});

Route::prefix('')->group(function(){
    Route::get('program', function(){
        return view('program');
    });
});

Route::get('/about-us', function(){
    return view('about-us');
});

Route::resource('contact-us', ContactUsController::class)->only([
    'index',
]);