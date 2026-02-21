<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:web')->group(function () {
    Route::prefix('v1')->group(function () {
        Route::post('/target', function (Request $request) {
            return response()->json(['success' => true]);
        });
    });
});
