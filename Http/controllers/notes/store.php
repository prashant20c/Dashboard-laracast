<?php


$config = require base_path('config.php');
$errors = [];

use core\App;
use core\Validation;
use core\Database;

$body = $_POST['body'];

if (!Validation::string($body, 1, 1000)) {
    $errors['body'] = 'A body of no more that 1000 characters is required.';
};

if (!empty($errors)) {
    return view('notes/create.view.php', ['heading' => 'Add Note', 'errors' => $errors]);
};



if (empty($errors)) {

    $db = App::resolve(Database::class);
    $query = 'INSERT INTO notes(body,user_ID) VALUES(:body,:user_ID)';
    $db->executeQuery($query, ['body' => $body, 'user_ID' => $_SESSION['user']['ID']]);

    header('location: /notes');
    exit();
};
