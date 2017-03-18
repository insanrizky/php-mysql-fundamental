<?php

include 'connection.php';

# First Way
$sql = $db->prepare("INSERT INTO user (username, password) VALUES (:username, :password)");
$sql->bindValue(':username', 'praditya', PDO::PARAM_STR);
$sql->bindValue(':password', 'vlexibility', PDO::PARAM_STR);
echo $sql->execute();

# Second Way
$username = "luffy";
$password = "darkmoon";
$sql = $db->prepare("INSERT INTO user (username, password) VALUES (:username, :password)");
$sql->bindParam(':username', $username, PDO::PARAM_STR, 100);
$sql->bindParam(':password', $password, PDO::PARAM_STR, 100);
echo $sql->execute();

# Third Way
$sql = $db->prepare("INSERT INTO user (username, password) VALUES (:username, :password)");
echo $sql->execute([
    "username" => "sisca",
    "password" => "sobeautiful"
]);

# You can figure out other way to do something like this.

