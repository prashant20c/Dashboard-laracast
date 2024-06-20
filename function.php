<?php

///superglobal functions 

function dd($value)
{

    echo ('<pre>');

    print_r($value);

    echo ('</pre>');

    die();
};


function urlIS($value){
 return $_SERVER['REQUEST_URI']  === $value ? true : false;
}