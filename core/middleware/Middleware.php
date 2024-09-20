<?php

namespace core\Middleware;

use core\middleware\Auth;
use core\middleware\Guest;


class Middleware
{

  const MAP = ['guest' => Guest::class, 'auth' => Auth::class];


  public static function resolve($key)
  {


    if (!$key) return;

    $middleware = static::MAP[$key] ?? false;

    if (!$middleware) {

      throw new \Exception("No matching middleware found for key '{$key}'.");
    }

    (new $middleware)->handel();
  }
}
