<?php

use core\App;
use core\Database;

$currentUser = 1;



$db = App::resolve(Database::class);




$query = 'select * from notes where user_ID = ?';


/// issue with  fetch() function  in $db->find() function insted of fetchall() , multiple results from database is not being processed .
// but works fines with note.php  as it will have single record to fetch. 

$notes = $db->executeQuery($query,[$currentUser])->get();




view('notes/index.view.php',['heading'=>'Notes','notes'=>$notes]);