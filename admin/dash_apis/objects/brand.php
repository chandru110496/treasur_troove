<?php
// 'user' object
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "brand";
 
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
    $sqlQuery = "SELECT * FROM " . $this->table_name . " order by brand_id desc";
    $stmt = $this->conn->prepare($sqlQuery);
    $stmt->execute();
    return $stmt;
}

public function getsingleInfo(){
    $sqlQuery = "SELECT * FROM ". $this->table_name ." WHERE brand_id = ?";
    $stmt = $this->conn->prepare($sqlQuery);
    $this->id=htmlspecialchars(strip_tags($this->id));

	// bind given email value
	$stmt->bindParam(1, $this->id);
    
    $stmt->execute();
    return $stmt;
}

public function getInfo(){
    $sqlQuery = "SELECT * FROM ". $this->table_name ." WHERE brand_id != ?";
    $stmt = $this->conn->prepare($sqlQuery);
    $this->brand=htmlspecialchars(strip_tags($this->brand));

    // bind given email value
    $stmt->bindParam(1, $this->brand);
    
    $stmt->execute();
    return $stmt;
}

public function createInfo(){
            
            $sqlQuery = "INSERT INTO ". $this->table_name ." SET
                                                            brand_name= :brand_name,
                                                            brand_image= :filename";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->brand_name=htmlspecialchars(strip_tags($this->brand_name));
            $this->filename=htmlspecialchars(strip_tags($this->filename));
        
            // bind data
            $stmt->bindParam(":brand_name", $this->brand_name);
            $stmt->bindParam(":filename", $this->filename);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
public function updateInfo(){
            $sqlQuery = "UPDATE ". $this->table_name ." SET
            brand_name= :brand_name,
            brand_image= :filename WHERE brand_id = :brand_id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->brand_name=htmlspecialchars(strip_tags($this->brand_name));
            $this->filename=htmlspecialchars(strip_tags($this->filename));
            $this->brand_id=htmlspecialchars(strip_tags($this->brand_id));
        
            // bind data
            $stmt->bindParam(":brand_name", $this->brand_name);
            $stmt->bindParam(":filename", $this->filename);
            $stmt->bindParam(":brand_id", $this->brand_id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }


function Delete(){
            $sqlQuery = "DELETE FROM " . $this->table_name . " WHERE brand_id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }


}
?>