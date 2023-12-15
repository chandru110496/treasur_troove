<?php
// used to get mysql database connection
class Database{

// for test server
// private $host = "localhost";
// private $db_name = "traitspm_treasure";
// private $username = "traitspm_treasure";
// private $password = "traitspm_treasure";
// public $conn;

//  for livesystem in
    // specify your own database credentials
    // private $host = "localhost";
    // private $db_name = "u541379268_treasure";
    // private $username = "u541379268_treasure";
    // private $password = "Teckzy@123";
    
    // for localhost in $host
    private $host = "localhost";
    private $db_name = "u541379268_treasure";
    private $username = "u541379268_treasure";
    private $password = "Teckzy@123";
    public $conn;
 
    // get the database connection
    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>