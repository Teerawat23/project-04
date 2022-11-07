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
//e
Route::get('/admin/product/edit{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('adminpage.adminproduct.edit');
Route::post('/admin/product/update{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('adminpage.adminproduct.update');
 //Type Product
 Route::get('/admin/typeproduct', [App\Http\Controllers\TypeProductController::class, 'index'])->name('adminpage.admintypeproduct.product');
//c
 Route::get('/admin/typeproduct/add', [App\Http\Controllers\TypeProductController::class, 'formadd'])->name('adminpage.admintypeproduct.formadd');
 Route::post('/admin/typeproduct/add', [App\Http\Controllers\TypeProductController::class, 'add'])->name('adminpage.admintypeproduct.add');
 //e
 Route::get('/admin/typeproduct/edit/{id}', [App\Http\Controllers\TypeProductController::class, 'edit'])->name('adminpage.admintypeproduct.edit');
 Route::post('/admin/typeproduct/update/{id}', [App\Http\Controllers\TypeProductController::class, 'update'])->name('adminpage.admintypeproduct.update');

 
 //employee
 Route::get('/admin/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('adminpage.adminemployee.employee');
 Route::get('/admin/employee/add', [App\Http\Controllers\EmployeeaddController::class, 'index'])->name('adminpage.adminemployee.add');
 Route::get('/admin/employee/edit', [App\Http\Controllers\EmployeeeditController::class, 'index'])->name('adminpage.adminemployee.edit');
//
 //promotion
 Route::get('/admin/promotion', [App\Http\Controllers\PromotionController::class, 'index'])->name('adminpage.adminpromotion.promotion');
 //c
 Route::get('/admin/promotion/add', [App\Http\Controllers\PromotionController::class, 'formadd'])->name('adminpage.adminpromotion.formadd');
 Route::post('/admin/promotion/add', [App\Http\Controllers\PromotionController::class, 'add'])->name('adminpage.adminpromotion.add');
//e
 Route::get('/admin/promotion/edit/{id}', [App\Http\Controllers\PromotionController::class, 'edit'])->name('adminpage.adminpromotion.edit');
 Route::post('/admin/promotion/update/{id}', [App\Http\Controllers\PromotionController::class, 'update'])->name('adminpage.adminpromotion.update');

//end admin

