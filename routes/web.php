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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\TCLController;
Route::get('/tcl', [TCLController::class, 'index'])->name('tcl.index');
Route::get('/tcl/about-tcl', [TCLController::class, 'aboutTCL'])->name('tcl.about');
Route::get('/tcl/download', [TCLController::class, 'catalog_download'])->name('tcl.catalog');

use App\Http\Controllers\ContactController;
Route::post('/tcl/contact-save', [ContactController::class, 'contact_save'])->name('contact.save');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\ProductController;
Route::resource('/products',ProductController::class);