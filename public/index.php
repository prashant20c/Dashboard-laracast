<?php


 const BASE_PATH =__DIR__ . '/../';



require BASE_PATH. 'core/function.php';



//connect to database and execuate a query .

spl_autoload_register(function($class){
$path = str_replace('\\',DIRECTORY_SEPARATOR,$class);
require base_path("{$path}.php");
});



$router = new core\Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];





$router->route($uri,$method);

///extraction of file path going on.....




 