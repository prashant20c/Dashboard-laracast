<?php

$heading ='notes';
$userID = 1;

$config = require './config.php';

$db = new connectDatabase($config[$database]);
$query = 'select * from notes where user_ID = ?';


/// issue with  fetch() function  in $db->find() function insted of fetchall() , multiple results from database is not being processed .
// but works fines with note.php  as it will have single record to fetch. 

$notes = $db->executeQuery($query,[$userID])->get();

if(!$notes){
    abort();
}




require './views/notes.view.php';