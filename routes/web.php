<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:web')->group(function () {
    Route::get('/', function () {
        return view('explore.index');
    });

    Route::get('/home', function () {
        return view('explore.index');
    });

    Route::get('/explore', function () {
        return view('explore.index');
    })->name('explore.index');
});
