<?php 

use core\Database;


$config = require base_path('config.php');
$id = $_GET['id'];

$currentUser = 1;

// if($_SERVER['REQUEST_METHOD'] === 'POST'){
//     dd($_SERVER);
// };    woring in delete



$db = new Database($config[$database]);
$query = 'select * from notes where id = :id';

$note = $db->executeQuery($query,['id' =>$id ])->findOrFail();


authorize( $note['user_ID'] == 1);


view('notes/show.view.php',['heading'=>'Notes','note'=>$note]);
