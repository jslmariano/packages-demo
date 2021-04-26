<?php

namespace Demo\Sample\Tests;

/**
 * VENDOR
 */
use Illuminate\Http\JsonResponse;

/**
 * APP
 */
use TestCase;

/**
 * This class describes a classes controller test.
 */
class DummyControllerTest extends TestCase {

    /**
     * Test gree
     */
    public function test_greet()
    {
        $request = $this->json('GET', 'demo/sample/dummy/greet', [
            'name' => 'kawpaytek'
        ]);
        $response = $request->response;
        $response->assertJson([
            'message' => "Hi There! kawpaytek",
        ]);
        $this->assertEquals($response->status(), JsonResponse::HTTP_OK);
    }
}