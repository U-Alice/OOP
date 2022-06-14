<?php
//user info collected from input
class database{
    public $que;
    private $host = 'localhost';
    private $password = 'ine';
    private $database = 'store';
    private $username = 'inezaaxelle44@gmail.com';

    public function __construct(){
        $this->mysqli = new mysqli($this->host ,$this->username, $this->password, $this->database);

        if($this->mysqli->connect_errno){
            echo "Failed to connect to MySQL: " . $this->mysqli->connect_error;
        }
    }
    public function insert($table, $para=array()){
        $table_columns = implode(',', array_keys($para));
        $table_values = implode("','", $para);
        $sql = "INSERT INTO $table($table_columns) VALUES('$table_values')";
        echo $sql;
        $result = $this->mysqli->query($sql);
        if($result){
            echo "successfull";
        }else{
            echo "failed".$result;
        }
    }
    public function select($table, $rows = '*', $where = null){
        if ($where != null) {
            $sql="SELECT $rows FROM $table WHERE $where";
        }else{
            $sql="SELECT $rows FROM $table";
        }

        $this->sql = $result = $this->mysqli->query($sql);
    }

}
?>