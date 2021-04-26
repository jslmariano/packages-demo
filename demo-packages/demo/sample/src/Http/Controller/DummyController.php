<?php

namespace Demo\Sample\Http\Controllers;

/**
 * Vendor
 */
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * App
 */
use Laravel\Lumen\Routing\Controller as BaseController;
use Demo\Sample\Http\Responses\Generic\GreetResponse;

/**
 * Controls the data flow into a dummy object and updates the view whenever data changes.
 */
class DummyController extends BaseController
{
    /**
     * greet
     *
     * @param      \Illuminate\Http\Request  $request  The request
     *
     * @return     Response
     */
    public function greet(Request $request)
    {
        return new GreetResponse($request->input('name'));
    }

}
