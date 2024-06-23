<?php


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => './controllers/index.php',
    '/about' => './controllers/about.php',
    '/notes' => './controllers/notes.php',
    '/mission' => './controllers/mission.php',
    '/note' => './controllers/note.php'

];

//function to show error  

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code); 
    require "./views/$code.view.php";
    die();
};

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require  $routes[$uri];
    } else {
        abort();
    }
};


routeToController($uri, $routes);


