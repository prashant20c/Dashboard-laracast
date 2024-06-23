<?php 

$heading = 'Notes';

$config = require './config.php';
$id = $_GET['id'];

$currentUser = 1;


$db = new connectDatabase($config[$database]);
$query = 'select * from notes where id = :id';

$note = $db->executeQuery($query,['id' =>$id ])->findOrFail();


authorize( $note['user_ID'] === 1);








require './views/note.view.php';

