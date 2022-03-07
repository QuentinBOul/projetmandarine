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

$id = implode($_GET);


// Routes Default
$router->register('/', '\App\controller\UserController::login');
$router->register('/logout', '\App\controller\UserController::logout');

// Routes Gestion Commerciale

$router->register('/dashboard1', '\App\controller\UserController::dashboard_com');
$router->register('/clients', '\App\controller\UserController::clients');
$router->register('/contacts', '\App\controller\UserController::contacts');
$router->register('/clientProfil='.$id, '\App\controller\UserController::clientProfil');
$router->register('/contactProfil='.$id, '\App\controller\UserController::contactProfil');
$router->register('/formClient', '\App\controller\UserController::formClient');
$router->register('/addClient', '\App\controller\UserController::addClient');
$router->register('/formContact', '\App\controller\UserController::formContact');
$router->register('/addContact', '\App\controller\UserController::addContact');
$router->register('/editClient', '\App\controller\UserController::editClient');
$router->register('/editContact', '\App\controller\UserController::editContact');

// Routes Gestion des Projets
$router->register('/dashboard2', '\App\controller\UserController::dashboard_project');

// Routes Gestion RH
$router->register('/dashboard3', '\App\controller\UserController::usersList');
$router->register('/userProfil='.$id, '\App\controller\UserController::userProfil');
$router->register('/formUser', '\App\controller\UserController::formUser');
$router->register('/addUser', '\App\controller\UserController::addUser');
$router->register('/editUser', '\App\controller\UserController::editUser');

$router->run();