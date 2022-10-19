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
 //product
 Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'index'])->name('adminpage.adminproduct.product');
//c
 Route::get('/admin/product/add', [App\Http\Controllers\ProductController::class, 'formadd'])->name('adminpage.adminproduct.formadd');
 Route::post('/admin/product/add', [App\Http\Controllers\ProductController::class, 'add'])->name('adminpage.adminproduct.add');
 Route::get('/admin/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete']);

 Route::get('/admin/product/edit', [App\Http\Controllers\ProducteditController::class, 'index'])->name('adminpage.adminproduct.edit');
 //Type Product
 Route::get('/admin/typeproduct', [App\Http\Controllers\TypeProductController::class, 'index'])->name('adminpage.admintypeproduct.product');
//c
 Route::get('/admin/typeproduct/add', [App\Http\Controllers\TypeProductController::class, 'formadd'])->name('adminpage.admintypeproduct.formadd');
 Route::post('/admin/typeproduct/add', [App\Http\Controllers\TypeProductController::class, 'add'])->name('adminpage.admintypeproduct.add');
 

 Route::get('/admin/typeproduct/edit', [App\Http\Controllers\TypeProducteditController::class, 'index'])->name('adminpage.admintypeproduct.edit');
 //employee
 Route::get('/admin/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('adminpage.adminemployee.employee');
 Route::get('/admin/employee/add', [App\Http\Controllers\EmployeeaddController::class, 'index'])->name('adminpage.adminemployee.add');
 Route::get('/admin/employee/edit', [App\Http\Controllers\EmployeeeditController::class, 'index'])->name('adminpage.adminemployee.edit');

 //news
 Route::get('/admin/news', [App\Http\Controllers\NewsController::class, 'index'])->name('adminpage.adminnews.news');

 Route::get('/admin/news/add', [App\Http\Controllers\NewsController::class, 'formadd'])->name('adminpage.adminnews.formadd');
 Route::post('/admin/news/add', [App\Http\Controllers\NewsController::class, 'add'])->name('adminpage.adminnews.add');

 Route::get('/admin/news/edit', [App\Http\Controllers\NewseditController::class, 'index'])->name('adminpage.adminnews.edit');

 //promotion
 Route::get('/admin/promotion', [App\Http\Controllers\PromotionController::class, 'index'])->name('adminpage.adminpromotion.promotion');
 //c
 Route::get('/admin/promotion/add', [App\Http\Controllers\PromotionController::class, 'formadd'])->name('adminpage.adminpromotion.formadd');
 Route::post('/admin/promotion/add', [App\Http\Controllers\PromotionController::class, 'add'])->name('adminpage.adminpromotion.add');

 Route::get('/admin/promotion/edit', [App\Http\Controllers\PromoeditController::class, 'index'])->name('adminpage.adminpromotion.edit');
//end admin

