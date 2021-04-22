<?php

// your routes goes here
$router->get('/', ['WelcomeController@home', 'auth']);
$router->get('/home', ['WelcomeController@home', 'auth']);

$router->get('/project', ['ProjectController@index', 'auth']);
$router->get('/project/detail/{id}', ['ProjectController@detail', 'auth']);
$router->post('/project/detail/{id}', ['ProjectController@updateDetail', 'auth']);
$router->get('/project/add', ['ProjectController@add', 'auth']);
$router->post('/project/add', ['ProjectController@store', 'auth']);
$router->post('/project/delete/{id}', ['ProjectController@delete', 'auth']);
