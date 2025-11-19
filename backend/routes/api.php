<?php

use App\Http\Controllers\PingController;
use Illuminate\Support\Facades\Route;

Route::group(['throttle:30,1'], function () {
    Route::resource('ping', PingController::class)->only(['store']);
});

Route::fallback(fn() => response()->json(['status' => 'failed'], 404));