<?php 

$heading = 'Notes';

$config = require './config.php';
$id = $_GET['id'];

$currentUser = 1;


$db = new connectDatabase($config[$database]);
$query = 'select * from notes where id = :id';

$note = $db->executeQuery($query,['id' =>$id ])->fetch();

if(! $note){
    abort(404);
};


if( $note['user_ID'] != 1){
    abort(Response::FORBIDDEN);
};







require './views/note.view.php';

