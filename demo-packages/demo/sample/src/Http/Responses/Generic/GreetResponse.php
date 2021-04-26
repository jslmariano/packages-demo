<?php

namespace Demo\Sample\Http\Responses\Generic;

use Illuminate\Http\JsonResponse;

/**
 * This class describes a greet response.
 */
class GreetResponse extends JsonResponse
{
    CONST MESSAGE = "Hi There! %s";

    CONST DEFAULT_CODE = JsonResponse::HTTP_OK;

    /**
     * Constructs a new instance.
     *
     * @param      string  $name   The name
     */
    public function __construct($name = "")
    {
        $message = [
            'message' => sprintf(self::MESSAGE, $name),
        ];
        parent::__construct($message, self::DEFAULT_CODE);
    }
}