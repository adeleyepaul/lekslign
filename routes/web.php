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

Route::get('/', [App\Http\Controllers\PagesController::class, 'index']);

Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);

Route::get('/services', [App\Http\Controllers\PagesController::class, 'services']);

Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact']);

Route::post('/send-email', [App\Http\Controllers\ContactController::class, 'sendEmail']) ->name('send.email');
