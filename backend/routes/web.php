<?php

use Illuminate\Support\Facades\Route;

Route::fallback(fn() => response()->json(['error' => 1], 404));