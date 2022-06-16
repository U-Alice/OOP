<?php
include "./connection.php";
$database = new database();
$id = $_GET["thisID"];
$database -> delete("users", "userId = $id");
?>