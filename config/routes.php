<?php
use App\Router\Router;
use App\Controllers\HomeController;
use App\Controllers\DisciplinesController;
use App\Controllers\AdminController;

$router = new Router();

$router->get('/', [new HomeController(), 'index']);
$router->get('/disciplines', [new DisciplinesController(), 'index']);
$router->get('/admin', [new AdminController(), 'index']);

return $router;