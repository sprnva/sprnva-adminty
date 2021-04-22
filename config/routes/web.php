<?php

// your routes goes here
$router->get('/', ['WelcomeController@home', 'auth']);
$router->get('/home', ['WelcomeController@home', 'auth']);

$router->get('/testCrud', ['WelcomeController@index', 'auth']);
