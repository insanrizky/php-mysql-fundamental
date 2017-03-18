<?php

$host = "127.0.0.1";
$database = "php_mysql";
$username = "root";
$password = "";

try{
    $db = new \PDO("mysql:host=$host;dbname=$database", $username, $password);
}catch(PDOException $e){
    echo $e->getMessage();
}
