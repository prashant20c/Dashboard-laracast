<?php

use core\Database;
use core\App;
use core\Validation;


$body = $_POST['body'];
$id = $_POST['id'];
$user_ID = $_POST['user_ID'];
$errors = [];


if (!Validation::string($body, 1, 1000)) {
    $errors['body'] = 'A body of no more that 1000 characters is required.';
};

if (!empty($errors)) {
    return view('notes/edit.view.php', ['heading' => 'Edit Note', 'errors' => $errors]);
};

if (empty($errors)) {
    $db = App::resolve(Database::class);
    $query = "UPDATE notes SET body = :body WHERE id = :id ";
    authorize($user_ID == 1);
    $db->executeQuery($query, ['body' => $body, 'id' => $id]);
    header('Location: /notes');
    exit();
};
