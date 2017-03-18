<?php

include 'connection.php';

# First Way - Only Get One Row
$sql = $db->prepare("SELECT * FROM user WHERE username=:username");
$sql->execute([
    "username" => "praditya"
]);
$data = $sql->fetch(PDO::FETCH_OBJ);
echo $data->username." - ".$data->password;

# Second Way - Get Many Row
$sql = $db->prepare("SELECT * FROM user");
$sql->execute();
$data = $sql->fetchAll(PDO::FETCH_OBJ);
var_dump($data);

# You can figure out other way to do something like this.

