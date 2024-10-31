<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('pages.auth.login');
});

Route::get('home', function(){
    return view('pages.dashboard');
});

Route::resource('user', UserController::class);

// routing otentikasi di pindahin ke app/providers/FortivyServiceProvider
// Route::get('/login', function () {
//     return view('pages.auth.login',);
// })->name('login');r

// Route::get('/register', function () {
//     return view('pages.auth.register',);
// })->name('register');