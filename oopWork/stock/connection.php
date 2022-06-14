<?php
$host = "127.0.0.1";
$dbuser = "Alice";
$password = "@Feb7/2022";
$database = "Stock";

$dbConn = new mysqli($host, $dbuser, $password, $database);
if($dbConn->connect_error){
    die("Connection failed: " . $dbConn->connect_error);
}

$qryInsert = " Insert into users(firstname, lastname , telephone, gender, nationality, username, email, password) Values('Inema', 'Aela', 078787483, 'Female', 'Rwandese', 'Aela', 'InemaAela@gmail.com', 'Aela12')";


$insert = $dbConn->query($qryInsert);
echo $dbConn->insert_id;
?>