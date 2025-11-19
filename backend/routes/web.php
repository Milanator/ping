<?php

use Illuminate\Support\Facades\Route;

Route::fallback(fn() => response()->json(['status' => 'failed'], 404));