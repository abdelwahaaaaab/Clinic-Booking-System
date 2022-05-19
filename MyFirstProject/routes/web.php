<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ThanksController;
use Illuminate\Http\Request;

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

/*
Route::get('/test/{id}',[UserController::class, 'show']);

Route::get('/home',[HomeController::class, 'index']);
Route::get('/book',[BookController::class, 'index']);
Route::get('/contact',[ContactController::class, 'index']);
Route::get('/login',[LoginController::class, 'index']);
Route::get('/sign-up',[SignupController::class, 'index']);
Route::get('/thanks',[ThanksController::class, 'index']);


Route::post('/book/store',[BookController::class, 'store'])->name('book.store');
Route::post('/contact/store',[ContactController::class, 'store'])->name('contact.store');


Route::get('/book/{id}/edit',[BookController::class, 'edit']);
Route::put('/book/{id}',[BookController::class, 'update'])->name('book.update');


Route::delete('/show/{id}',[BookController::class, 'destroy'])->name('book.destroy');


*/

    
    
    
Route::group(['middleware' => 'login'], function(){

    Route::resource('/home', 'App\Http\Controllers\HomeController');
    Route::resource('/book', 'App\Http\Controllers\BookController');
    Route::resource('/contact', 'App\Http\Controllers\ContactController');
    Route::resource('/thanks', 'App\Http\Controllers\ThanksController');
    Route::resource('/admin', 'App\Http\Controllers\AdminController');
});

//Route::group(['middleware' => 'user'], function(){

    Route::resource('/login', 'App\Http\Controllers\LoginController');
    Route::resource('/sign-up', 'App\Http\Controllers\SignupController');



