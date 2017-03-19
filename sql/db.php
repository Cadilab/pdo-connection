<?php

$dsn = 'mysql:dbname=database;host=127.0.0.1';
$user = 'user';
$password = 'password';

try 
{
    $dbh = new PDO($dsn, $user, $password);
}
catch (PDOException $e) 
{
    echo 'Connection failed: ' . $e->getMessage();
}

?>