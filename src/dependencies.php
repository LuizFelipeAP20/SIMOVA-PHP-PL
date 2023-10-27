<?php

use App\Controllers\AppointmentController;
use App\Controllers\EmployeeController;

$container = $app->getContainer();

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('templates');

    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};

$container['AppointmentController'] = function($c) {
    return new App\Controllers\AppointmentController($c);
};
$container['EmployeeController'] = function($c) {
    return new App\Controllers\EmployeeController($c);
};