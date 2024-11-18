<?php

class Route {
    private static $getRoutes = [];
    private static $postRoutes = [];

    public static function get($path, $callback) {
        self::$getRoutes[$path] = $callback;
    }

    public static function post($path, $callback) {
        self::$postRoutes[$path] = $callback;
    }

    public static function dispatch($requestUri) {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        
        // Select routes based on request method
        $routes = $requestMethod === 'GET' ? self::$getRoutes : self::$postRoutes;

        foreach ($routes as $route => $callback) {
            $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_]+)', $route);
            $pattern = str_replace('/', '\/', $pattern);
            
            if (preg_match('/^' . $pattern . '$/', $requestUri, $matches)) {
                array_shift($matches); // Remove the full match

                if (is_array($callback)) {
                    [$controller, $method] = $callback;

                    if (class_exists($controller)) {
                        $controllerInstance = new $controller(); // Instantiate the controller
                        return call_user_func_array([$controllerInstance, $method], $matches);
                    }
                }
            }
        }

        // Route not found
        http_response_code(404);
        // echo "<h1>404 Not Found</h1>";
    }
}
