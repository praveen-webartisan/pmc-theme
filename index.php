<?php

require __DIR__ . '/app/includer.php';

$appDir = dirname($_SERVER['PHP_SELF']);

$route = new Route();

$route->get('/', 'homeController@home');
$route->post('/set-theme', 'homeController@setThemeAction');
$route->post('/send-contact-form', 'homeController@contactFormSubmitAction');

$route->proceed();