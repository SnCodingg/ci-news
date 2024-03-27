<?php

use App\Controllers\DashboardController;
use App\Controllers\LoginController;
use App\Controllers\NewsController;
use App\Controllers\RegisterController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', function(){
    return view('home');
});
$routes->get('/news',[NewsController::class,'index'],['filter' => 'authFilter']);
$routes->get('/single/(:segment)', [NewsController::class,'show'],['filter' => 'authFilter']);

$routes->get('/register',[RegisterController::class,'index'],['filter'=>'guestFilter']);
$routes->post('/register',[RegisterController::class,'register'],['filter'=>'guestFilter']);
$routes->get('/login',[LoginController::class,'index'],['filter' => 'guestFilter']);
$routes->post('/login',[LoginController::class,'authenticate'],['filter' => 'guestFilter']);
$routes->get('/logout',[LoginController::class,'logout'],['filter' => 'authFilter']);
$routes->get('/dashboard',[DashboardController::class,'index'],['filter' => 'authFilter']);
$routes->get('/addnews',[NewsController::class,'addNewsForm'],['filter' => 'authFilter']);
$routes->post('/addnews',[NewsController::class,'addNews'],['filter' => 'authFilter']);
$routes->get('/allnews',[NewsController::class,'allNews'],['filter' => 'authFilter']);
$routes->get('/delnews/(:segment)', [NewsController::class,'deleteNews'],['filter' => 'authFilter']);




// $routes->get('/', 'RegisterController::index', ['filter' => 'guestFilter']);
// https://www.binaryboxtuts.com/php-tutorials/how-to-make-user-login-and-registration-in-codeigniter-4/
