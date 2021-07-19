<?php

/**
 * --------------------------------------------------------------------------
 * Routes
 * --------------------------------------------------------------------------
 * 
 * Here is where you can register routes for your application.
 * Now create something great!
 * 
 */

$router->get('/', ['WelcomeController@home', 'auth']);
$router->get('/home', ['WelcomeController@home', 'auth']);

$router->group(["prefix" => "project", "middleware" => ["auth"]], function ($router) {
    $router->get('/', ['ProjectController@index']);
    $router->get('/{id}/edit', ['ProjectController@edit']);
    $router->post('/{id}', ['ProjectController@update']);
    $router->get('/create', ['ProjectController@create']);
    $router->post('/', ['ProjectController@store']);
    $router->post('/{id}/delete', ['ProjectController@destroy']);
});
