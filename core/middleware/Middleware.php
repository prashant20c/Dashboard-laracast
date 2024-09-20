<?php
namespace core\Middleware;

use core\middleware\Auth;
use core\middleware\Guest;

class Middleware {

  const MAP = ['guest' => Guest::class , 'auth' =>Auth::class];

}