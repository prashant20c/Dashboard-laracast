<?php

$heading = 'Add Note';

$config = require('./config.php');




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body = $_POST['body'];
    $errors =[];

    $validation = new Validation();

    if ($validation->checkBody($body)) {

        $query = 'INSERT INTO notes(body,user_ID) VALUES(:body,:user_ID)';
        $db = new ConnectDatabase($config[$database]);
        $db->executeQuery($query, ['body' => $body, 'user_ID' => 1]);
    }
    else {
        $errors = $validation->getErrors();
    }
};


require './views/note-create.view.php';
