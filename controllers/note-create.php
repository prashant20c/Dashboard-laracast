<?php

$heading = 'Add Note';

$config = require('./config.php');






if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $body = $_POST['body'];
    $errors = [];

    if (!validation::string($body, 1, 1000)) {
        $errors['body'] = 'A body of no more that 1000 characters is required.';
    };



    if (empty($errors)) {

        $query = 'INSERT INTO notes(body,user_ID) VALUES(:body,:user_ID)';
        $db = new ConnectDatabase($config[$database]);
        $db->executeQuery($query, ['body' => $body, 'user_ID' => 1]);
    };
};




require './views/note-create.view.php';
