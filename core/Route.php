<?php
class Route {
    private static $routes = [];

    public static function get($uri, $action) {
        self::$routes['GET'][$uri] = $action;
    }

    public static function dispatch() {
        $uri = $_GET['url'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];
        $routes = self::$routes[$method] ?? [];

        if (isset($routes[$uri])) {
            list($controller, $method) = explode('@', $routes[$uri]);
            require_once '../app/Controllers/' . $controller . '.php';
            $controller = new $controller();
            call_user_func([$controller, $method]);
        } else {
            echo "404 Not Found";
        }
    }
}