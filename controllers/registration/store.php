<?php

use core\App;
use core\Database;
use core\Validation;

$errors = [];
$fName = strtolower($_POST['firstName']);
$lName = strtolower($_POST['lastName']);
$email = strtolower($_POST['email']);
$password = $_POST['password'];

$db  = App::resolve(Database::class);

if (Validation::email($email)) {
    $query = 'Select * from users where email = :email';


    $userdata = $db->executeQuery($query, ['email' => $email])->find();

    if ($userdata) {
        $errors['email'] = 'Sorry,email already exits.';
        view('registration/create.view.php', ['errors' => $errors]);
        exit();
    }
}

if (! Validation::email($email)) {
    $errors['email'] = 'Please Provide a Valid email address';
}

if (!Validation::password($password)) {
    $errors['password'] = 'Minimum eight characters, at least one letter, one number and one special character:';
}

if (!empty($errors)) {
    view('registration/create.view.php', ['errors' => $errors]);
}


if (empty($errors)) {

    $query = 'INSERT INTO users(firstName,lastName,email,password) VALUES (:fName,:lName,:email,:password)';
    $db->executeQuery($query, ['fName' => $fName, 'lName' => $lName, 'email' => $email, 'password' => $password]);
    $_SESSION['user'] = ['email' => $email,'fName'=>$fName];
    header('location: /');
    exit;
}
