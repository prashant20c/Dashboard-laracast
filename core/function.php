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
