<?php 

$heading = 'Notes';

$config = require './config.php';
$id = $_GET['id'];


$db = new connectDatabase($config[$database]);
$query = 'select * from notes where id = ?';

$note = $db->executeQuery($query,[$id])->fetch();








require './views/note.view.php';

