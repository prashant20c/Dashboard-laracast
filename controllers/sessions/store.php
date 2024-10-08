<?php

use core\App;
use core\Database;
use core\Validation;

$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

if (! Validation::email($email)) {
    $errors['email'] = 'Please Provide a Valid email address';
}

// if (!Validation::password($password)) {
//     $errors['password'] = 'Minimum eight characters, at least one letter, one number and one special character:';
// }

if(!empty($errors)){
    return view('sessions/create.view.php',['errors'=>$errors]);
}

$db = App::resolve(Database::class);
$userdata = $db->executeQuery('Select email,password,firstName from users where email = :email', ['email' => $email])->find();

/*  corss checking of email is partialy fixed.*/


if(!$userdata){
    $errors['email'] = 'Check Email or password ';
    return view('sessions/create.view.php',['errors'=>$errors]);
}

if(! password_verify($password,$userdata['password'])){
    $errors['password'] = 'Check Email or password';
    return view('sessions/create.view.php',['errors'=>$errors]);
}


if(password_verify($password,$userdata['password'])){
     login($userdata);
     header('location: /');
    exit;
     
}
