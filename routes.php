<?php

$router->get('/', 'index.php');
$router->get('/about', 'about.php');
$router->get('/notes', 'notes/index.php')->only('auth');
$router->get('/mission', 'mission.php');
$router->get('/note', 'notes/show.php');
$router->get('/note-create', 'notes/create.php');
$router->get('/note/edit', 'notes/edit.php');
//post and delete
$router->post('/note-create', 'notes/store.php');
$router->delete('/note', 'notes/destroy.php');
$router->Patch('/note/edit', 'notes/update.php');

// registeration 
$router->get('/register','registration/create.php')->only('guest');
$router->post('/register','registration/store.php');

//login & logout
$router->get('/logout','sessions/destroy.php')->only('auth');
$router->get('/login','sessions/create.php')->only('guest');
$router->post('/login','sessions/store.php')->only('guest');