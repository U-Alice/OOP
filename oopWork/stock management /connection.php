<?php
//user info collected from input
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