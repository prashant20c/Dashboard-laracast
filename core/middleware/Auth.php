<?php

namespace core\middleware;

class Auth
{

    public function handel()
    {

        if (! $_SESSION['user'] ?? false) {
            header('location: /login');
            exit;
        }
    }
}
