<?php
// 'user' object
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "attributes";
 
    // object properties
//    public $id;
//    public $brand;
//    public $image;
//    public $speciality_status;
 
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
 
public function getData(){
    $sqlQuery = "SELECT * FROM " . $this->table_name . " order by attributes_id desc";
    $stmt = $this->conn->prepare($sqlQuery);
    $stmt->execute();
    return $stmt;
}

public function getsingleInfo(){
    $sqlQuery = "SELECT * FROM ". $this->table_name ." WHERE attributes_id = ?";
    $stmt = $this->conn->prepare($sqlQuery);
    $this->id=htmlspecialchars(strip_tags($this->id));

	// bind given email value
	$stmt->bindParam(1, $this->id);
    
    $stmt->execute();
    return $stmt;
}

public function createInfo(){
            
            $sqlQuery = "INSERT INTO ". $this->table_name ." SET
                                                            attributes_name= :attributes_name";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->attributes_name=htmlspecialchars(strip_tags($this->attributes_name));
        
            // bind data
            $stmt->bindParam(":attributes_name", $this->attributes_name);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
public function updateInfo(){
            $sqlQuery = "UPDATE ". $this->table_name ." SET
                                                        speciality= :brand,
                                                        speciality_image= :filename WHERE speciality_id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->brand=htmlspecialchars(strip_tags($this->brand));
            $this->filename=htmlspecialchars(strip_tags($this->filename));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":brand", $this->brand);
            $stmt->bindParam(":filename", $this->filename);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }


function Delete(){
            $sqlQuery = "DELETE FROM " . $this->table_name . " WHERE attributes_id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }


}