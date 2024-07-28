<?php

use core\Database;


$config = require base_path('config.php');
$id = $_GET['id'];


$currentUser = 1;

$db = new Database($config['$database']);


    //for authrorization

    $query = 'select * from notes where id = :id';
    $note = $db->executeQuery($query, ['id' => $id])->findOrFail();
    authorize($note['user_ID'] == 1);

    //

//to delete
    $db->executeQuery('delete from notes where id=:id', ['id' => $_POST['id']]);

    header('location: /notes');
    exit();

