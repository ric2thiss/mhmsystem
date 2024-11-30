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
        $routes = $requestMethod === 'GET' ? self::$getRoutes : self::$postRoutes;
    
        foreach ($routes as $route => $callback) {
            // Convert {placeholder} into named capturing groups
            $pattern = preg_replace('/\{([a-zA-Z0-9_]+)\}/', '(?P<\1>[a-zA-Z0-9_]+)', $route);
            $pattern = '#^' . str_replace('/', '\/', $pattern) . '$#';
    
            if (preg_match($pattern, $requestUri, $matches)) {
                // Extract named parameters (remove numeric keys)
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
    
                if (is_array($callback)) {
                    [$controller, $method] = $callback;
    
                    if (class_exists($controller)) {
                        $controllerInstance = new $controller();
                        return call_user_func_array([$controllerInstance, $method], $params);
                    }
                }
            }
        }
    
        // Route not found
        http_response_code(404);
        echo "<h1>404 Not Found</h1>";
    }    
}
