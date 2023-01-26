<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', function () {

    if (Auth::user())
    return redirect('eval');
    else
    return redirect('login');

});


Route::post('login', [LoginController::class, 'postLogin'])->name('login');


Route::controller(HomeController::class)->group(function() {

Route::get('/eval', 'index')->name('index');


});



