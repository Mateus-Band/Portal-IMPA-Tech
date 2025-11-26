<?php
declare(strict_types=1);

session_start();

// Autoload
require_once __DIR__ . '/../vendor/autoload.php';

// Helpers
require_once __DIR__ . '/../src/Helpers/helpers.php';

// Config
require_once __DIR__ . '/../src/Config/config.php';

// Router
$router = require_once __DIR__ . '/../config/routes.php';

// Dispatch
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$router->dispatch($uri, $method);