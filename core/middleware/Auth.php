<?php

namespace core\middleware;

class Auth implements MiddlewareInterface
{

    public function handel()
    {

        if (! $_SESSION['user'] ?? false) {
            header('location: /register');
            exit;
        }
    }
}
