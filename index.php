<?php

require './function.php';

// require './router.php';


//connect to database and execuate a query .
require './database.php';

$config = require './config.php';

$id = $_GET['id'];
$query = "select * from test where id = ? ";

$db = new connectDatabase($config[$database]);
$users = $db->executeQuery($query,[$id])->fetchAll();

dd($users);
 