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
Route::view('/anime-details', 'promotepage.anime-details')->name('anime-details');
Route::view('/content', 'promotepage.content')->name('content');
Route::view('/blog', 'promotepage.blog')->name('blog');
//end promote


//start admin
 Auth::routes();

 Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('adminhome');
//end admin

