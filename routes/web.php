<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Illuminate\Contracts\Cache\Factory;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use Illuminate\Contracts\Cache\Repository;

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

Route::get('form-body', function()
{
    return Cache::get( 'name', 10, function (){
        return 'submitLogin';});
    });

// Route::get('login', [FormController::class, 'showSubmitLogin'])->name('showSubmitLogin');

Route::post('login', [LoginController::class, 'submitLogin'])->name('submitLogin');

Route::get('signUp', [FormController::class, 'showSubmitSignUp'])->name('showSubmitSignUp');

Route::post('signUp', [LoginController::class, 'submitSignUp'])->name('submitSignUp');

Route::get('newspage', [FormController::class, 'showNews'])->name('newspage');

Route::get('logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('calender', [FormController::class, 'showCalender'])->name('calender');