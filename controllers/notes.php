<?php

$heading ='notes';
$userID = 1;

$config = require './config.php';

$db = new connectDatabase($config[$database]);
$query = 'select * from notes where user_ID = ?';

$notes = $db->executeQuery($query,[$userID])->fetchAll();




require './views/notes.view.php';