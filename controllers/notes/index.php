<?php
use core\Database;


$currentUser = 1;

$config = require base_path('config.php');

$db = new Database($config['$database']);
$query = 'select * from notes where user_ID = ?';


/// issue with  fetch() function  in $db->find() function insted of fetchall() , multiple results from database is not being processed .
// but works fines with note.php  as it will have single record to fetch. 

$notes = $db->executeQuery($query,[$currentUser])->get();

if(!$notes){
    abort();
}


view('notes/index.view.php',['heading'=>'Notes','notes'=>$notes]);