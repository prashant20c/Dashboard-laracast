<?php


$config = require base_path('config.php');
$errors = [];

use core\Database;
use core\Validation;

    $body = $_POST['body'];

    if (!Validation::string($body, 1, 1000)) {
        $errors['body'] = 'A body of no more that 1000 characters is required.';
    };

    if(! empty($errors)){
         return view('notes/create.view.php',['heading'=>'Add Note','errors' => $errors]);

    };



    if (empty($errors)) {

        $query = 'INSERT INTO notes(body,user_ID) VALUES(:body,:user_ID)';
        $db = new Database($config['$database']);
        $db->executeQuery($query, ['body' => $body, 'user_ID' => 1]);

        header('location: /notes');
        exit();
    };

