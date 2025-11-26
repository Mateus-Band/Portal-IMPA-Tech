<?php
namespace App\Router;

class Router {
    private array $routes = [];

    public function get(string $path, callable $handler): void {
        $this->routes['GET'][$path] = $handler;
    }

    public function post(string $path, callable $handler): void {
        $this->routes['POST'][$path] = $handler;
    }

    public function dispatch(string $uri, string $method): void {
        $handler = $this->routes[$method][$uri] ?? null;

        if ($handler) {
            call_user_func($handler);
        } else {
            http_response_code(404);
            echo "404 - Página não encontrada";
        }
    }
}