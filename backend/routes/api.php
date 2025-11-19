<?php

use App\Http\Controllers\PingController;
use Illuminate\Routing\Route;

Route::resource('ping', PingController::class)->only(['store']);