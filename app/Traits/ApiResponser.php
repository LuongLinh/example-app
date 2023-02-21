<?php

namespace App\Traits;

use App\Utilities\StatusCodes;
use Illuminate\Http\JsonResponse;

trait ApiResponser
{
    /**
     * return success response with data
     */
    public function successResponse($data = null, ?string $message = null, int $code = StatusCodes::OK): JsonResponse
    {
        $response = $data;

        if (isset($message)) {
            $response = [
                'messages' => [$message],
            ];

            $response = array_merge($response, $data);
        }

        return response()->json($response, $code);
    }

    /**
     * return error response with no data
     */
    public function errorResponse($message, $code): JsonResponse
    {
        return response()->json([
            'message' => $message,
        ], $code);
    }
}
