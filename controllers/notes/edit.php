<?php

use core\App;
use core\Database;
$id = $_GET['id'];

$currentUser = 1;
$db = App::resolve(Database::class);

    //for authorization and get data 
    $query = 'select * from notes where id = :id';
    $note = $db->executeQuery($query, ['id' => $id])->findOrFail();
    authorize($note['user_ID'] == 1);



    view('notes/edit.view.php', ['heading' => 'Edit Note', 'note' => $note ,$errors=[]]);

