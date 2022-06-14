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

class database{
    public $que;
    private $host = 'localhost';
    private $password = '@Feb7/2022';
    private $database = 'Stock';
    private $username = 'Alice';

    public function __construct(){
        $this->mysqli = new mysqli($this->host ,$this->username, $this->password, $this->database);
    }
    public function insert($table, $para=array()){
        $table_columns = implode(',', array_keys($para));
        $table_values = impolode("','", $para);
        $sql = "INSERT INTO $table($table_columns) VALUES('$table_values')";
        $result = $this->mysqli->query($sql);
    }

}
?>