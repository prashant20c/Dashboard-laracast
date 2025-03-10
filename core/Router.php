<?php

namespace core;

use core\middleware\Auth;
use core\middleware\Guest;
use core\middleware\Middleware;


class Router
{

    protected $routes = [];


    public function add($uri, $controller, $method)
    {

        $this->routes[] =  [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null

        ];

        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        return $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller)
    {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function put($uri, $controller)
    {
        return $this->add($uri, $controller, 'PUT');
    }

    public function patch($uri, $controller)
    {
        return $this->add($uri, $controller, 'PATCH');
    }

    public function abort($code = Response::NOT_FOUND)
    {
        http_response_code($code);
        require base_path("views/errors/$code.view.php");
        die();
    }
/**
 * 
 */
    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {

                Middleware::resolve($route['middleware']);
         
                return require base_path('Http/controllers/' . $route['controller']);
            }
        }

        $this->abort();
    }

   
}
    

// use core\Response;



// //function to show error  


// function routeToController($uri, $routes)
// {
//     if (array_key_exists($uri, $routes)) {
//         require  $routes[$uri];
//     } else {
//         abort();
//     }
// };

// $routes = require base_path('routes.php');

// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];


// routeToController($uri, $routes);
