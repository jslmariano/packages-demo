<?php

/**
 * API ROUTES
 */
$router = $this->app->router;
$router->group(['prefix' => 'demo/sample'], function () use ($router) {

    $router->group(['namespace' => 'Demo\Sample\Http\Controllers'], function() use ($router) {
        $router->get('dummy/greet', 'DummyController@greet');
    });

});
