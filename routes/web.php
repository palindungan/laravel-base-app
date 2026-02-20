<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('explore.index');
});

Route::get('/explore', function () {
    return view('explore.index');
});
