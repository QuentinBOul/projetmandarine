<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Debogger
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


// TODO organiser la partie configuration
$config = parse_ini_file(__DIR__ . "/../config.ini");
define('BASE_URI', $config['base_uri']);



// Router
use App\core\Router;

$router = new Router();


// Routes Default
$router->register('/', '\App\controller\DefaultController::index');

// Routes Gestion Commerciale
$router->register('/dashboard1', '\App\controller\UserController::dashboard_com');
$router->register('/clients', '\App\controller\UserController::clients');
$router->register('/contacts', '\App\controller\UserController::contacts');

// Routes Gestion des Projets
$router->register('/dashboard2', '\App\controller\UserController::dashboard_project');

// Routes Gestion RH
$router->register('/dashboard3', '\App\controller\UserController::dashboard_rh');


$router->run();


