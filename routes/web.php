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

//  Route::get('/', function () {
//      return view('welcome');
//   });

//start promote
Route::view('/', 'promotepage.home')->name('home');
Route::view('/categories', 'promotepage.categories')->name('categories');
//end promote


//start admin
 Auth::routes();

  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//end admin

