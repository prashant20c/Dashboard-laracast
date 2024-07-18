<?php

 const BASE_PATH =__DIR__ . '/../';



require BASE_PATH. 'core/function.php';



//connect to database and execuate a query .

spl_autoload_register(function($class){
$path = str_replace('\\',DIRECTORY_SEPARATOR,$class);
require base_path("{$path}.php");
});

require base_path('core/router.php');


///extraction of file path going on.....




 