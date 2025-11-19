<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ping\StoreRequest;
use App\Models\Ping;
use Symfony\Component\HttpFoundation\JsonResponse;

class PingController extends Controller
{
    protected const STATUS_OK = 'ok';
    protected const STATUS_FAILED = 1;

    public function store(StoreRequest $request): JsonResponse
    {
        try {
            Ping::create($request->validated());

            return response()->json(['status' => self::STATUS_OK]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => self::STATUS_FAILED,
                'message' => $e->getMessage()
            ]);
        }
    }
}
