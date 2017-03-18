<?php

include 'connection.php';

# First Way
$sql = $db->prepare("DELETE FROM user WHERE username=:username");
echo $sql->execute([
    "username" => "luffy"
]);

# You can figure out other way to do something like this.

