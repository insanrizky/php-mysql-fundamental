<?php

include 'connection.php';

# First Way
$sql = $db->prepare("UPDATE user SET password=:newpassword WHERE username=:username");
echo $sql->execute([
    "newpassword" => "wkwkwk",
    "username" => "luffy"
]);

# You can figure out other way to do something like this.

