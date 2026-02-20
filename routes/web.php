<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/master1', function () {
    return view('components.layouts.master1.master');
});
