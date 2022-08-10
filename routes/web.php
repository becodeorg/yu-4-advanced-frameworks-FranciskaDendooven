<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [FormController::class, 'index'])->name('home');

Route::get('form', [FormController::class, 'show'])->name('form');

Route::post('login', [LoginController::class, 'submitLogin'])->name('submitLogin');

// Route::get('', function () {
//     return view('components/footer');
// })->name('');

// Route::get('/', function () {
//     return view('components/header');
// })->name('');
