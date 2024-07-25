<?php

    $router->get('/', 'controllers/index.php');
    $router->get('/about', 'controllers/about.php');
    $router->get('/notes', 'controllers/notes/index.php');
    $router->get('/mission', 'controllers/mission.php');
    $router->get('/note', 'controllers/notes/show.php');
    $router->get('/note-create', 'controllers/notes/create.php');
    //post and delete
    $router->post('/note-create', 'controllers/notes/create.php');
    $router->delete('/note','controllers/notes/destroy.php');

