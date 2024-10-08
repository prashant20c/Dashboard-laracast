<?php

use core\Response;

///superglobal functions 

function dd($value)
{

    echo ('<pre>');

    print_r($value);

    echo ('</pre>');

    die();
};


function urlIS($value)
{
    return $_SERVER['REQUEST_URI']  === $value ? true : false;
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);
    require base_path("views/errors/$code.view.php");
    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status); 
    }
}


function base_path($path)
{
    return BASE_PATH . $path;
}

function  view($path, $attribute = [])
{
    extract($attribute);
    require BASE_PATH . "/views/$path";
};


function login($userdata){
    session_start();
    $_SESSION['user'] = [
        'email'=> $userdata['email'],
        'fName' => $userdata['firstName']
    ];
};
