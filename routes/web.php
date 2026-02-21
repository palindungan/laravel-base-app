<?php

use Illuminate\Support\Facades\Route;

// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/register', function () {
//     return view('auth.register');
// });

Route::get('/', function () {
    return view('explore.index');
});

Route::get('/explore', function () {
    return view('explore.index');
})->name('explore.index');
