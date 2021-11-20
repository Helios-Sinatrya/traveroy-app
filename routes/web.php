<?php

use App\Http\Controllers\RegistrationController;
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

Route::view('/', 'landing-page');
Route::view('/login', 'auth.login')->name('login');
Route::view('/object', 'pages.dtl_object');

Route::middleware('guest')->group(function () {
    Route::get('register', [RegistrationController::class, 'create'])->name('register');
    Route::post('register', [RegistrationController::class, 'store']);
});