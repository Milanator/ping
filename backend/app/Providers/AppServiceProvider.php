<?php

namespace App\Providers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\ValidationException;

class AppServiceProvider extends ServiceProvider
{
    protected const STATUS_FAILED = 1;

    protected const CODE_FAILED = 422;

    public function register(): void
    {
    }

    public function boot(): void
    {
        $this->app
            ->make(\Illuminate\Contracts\Debug\ExceptionHandler::class)
            ->renderable(fn(ValidationException $exception, $request): JsonResponse => response()->json([
                'error' => self::STATUS_FAILED,
                'errors' => $exception->errors(),
            ], self::CODE_FAILED));
    }
}
