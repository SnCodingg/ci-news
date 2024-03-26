<?php

use App\Controllers\NewsController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function(){
    return view('home');
});
$routes->get('/news',[NewsController::class,'index']);
$routes->get('/single/(:segment)', [NewsController::class,'show']);
