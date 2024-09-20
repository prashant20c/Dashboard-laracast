<?php

namespace core\middleware;

class Guest implements MiddlewareInterface
{

    public function handel()
    {

        if ($_SESSION['user'] ?? false) {
            header('location: /');
            exit;
        }
    }
}
