<?php

use Hyperf\HttpServer\Router\Router;

Router::addGroup('/api/users', function () {
    Router::get('', 'App\Controller\Api\UserController@index');
    Router::post('', 'App\Controller\Api\UserController@store');
    Router::get('{id}', 'App\Controller\Api\UserController@show');
    Router::put('{id}', 'App\Controller\Api\UserController@update');
    Router::delete('{id}', 'App\Controller\Api\UserController@destroy');
});