<?php

if ($_SESSION['user']) {
logout();

    header('location: /');
        exit();
}
