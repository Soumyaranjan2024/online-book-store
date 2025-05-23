<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bookcontroller;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;


Route::get('/a', function () {
    return view('welcome');

});


Route::get('/login', [LoginController::class, 'create']);

Route::get('/register', [registercontroller::class, 'create1']);

Route::get('/crt', [cartcontroller::class, 'create2']);

Route::get('/cc', [contactcontroller::class, 'create3']);


Route::get('/ff', function () {
    return view('aboutus');
});

Route::get('/ourstory', function () {
    return view('ourstory');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/careers', function () {
    return view('careers');
});

Route::get('/press', function () {
    return view('press');
});

Route::get('/friction', function () {
    return view('frictionbook');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::post('/register', [registercontroller::class, 'store']);




Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
