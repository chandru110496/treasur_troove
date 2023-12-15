<?php
// 'user' object
class User{
    // database connection and table name
    private $conn;
    private $table_name = "order";
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
public function getData(){
    $sqlQuery = "SELECT * FROM " . $this->table_name . " order by order_id desc";
    $stmt = $this->conn->prepare($sqlQuery);
    $stmt->execute();
    return $stmt;
}
}
?>