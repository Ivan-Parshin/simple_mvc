<?php

namespace App\Core;

class Router
{
    public function dispatch(string $url)
    {
        $url = trim($url, '/');
        $segments = explode('/', $url);

        $controllerName = !empty($segments[0]) ? ucfirst($segments[0]) . 'Controller' : 'PostController';
        $methodName = $segments[1] ?? 'index';
        $params = array_slice($segments, 2);

        $controllerClass = 'App\\Controllers\\' . $controllerName;

        if (class_exists($controllerClass) && method_exists($controllerClass, $methodName)) {
            $controller = new $controllerClass;
            call_user_func_array([$controller, $methodName], $params);
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}
