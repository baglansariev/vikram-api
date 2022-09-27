<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'vikram-test-backend';
});

$router->group(['prefix' => 'api'], function() use($router) {
    $router->post('/login', 'AuthController@login');

    $router->group(['middleware' => 'auth'], function() use($router) {
        $router->get('/categories', 'ExampleController@categories');
        $router->get('/reviews', 'ExampleController@reviews');
        $router->post('/result', 'ExampleController@result');
    });
});
