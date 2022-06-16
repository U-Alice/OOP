<?php
include "./connection.php";
$database = new database();
$database -> update("users", array("firstName"=>"Alice", "lastName"=>"Smith"), "userId = 1");
?>