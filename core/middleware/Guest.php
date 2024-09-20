<?php

namespace core\middleware;

class Guest 
{

    public function handel()
    {

        if ($_SESSION['user'] ?? false) {
            header('location: /');
            exit;
        }
    }
}
