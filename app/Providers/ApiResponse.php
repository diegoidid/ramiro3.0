<?php

namespace App\Providers\Traits;

trait ApiResponse
{

    protected function successResponse($data, $message = 'Success',$code = 200)
    {

        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function errorResponse($message = 'error compare', $code = 400
    ) {
        return response()->json([
            'status' => 'error',
            'message' => $message,
        ], $code);
    }
}
