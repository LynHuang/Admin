<?php

use Illuminate\Routing\Router;

//Admin::registerHelpersRoutes();

Route::group([
    'prefix' => 'admin',
    'namespace' => Admin::controllerNamespace(),
    'middleware' => ['web', 'admin'],
], function (Router $router) {
    $router->get('/', 'HomeController@index');
});
