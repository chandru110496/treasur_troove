<?php
// 'user' object
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "category";
 
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
    $sqlQuery = "SELECT * FROM " . $this->table_name . " order by category_id desc";
    $stmt = $this->conn->prepare($sqlQuery);
    $stmt->execute();
    return $stmt;
}

public function getsingleInfo(){
    $sqlQuery = "SELECT * FROM ". $this->table_name ." WHERE speciality_id = ?";
    $stmt = $this->conn->prepare($sqlQuery);
    $this->id=htmlspecialchars(strip_tags($this->id));

	// bind given email value
	$stmt->bindParam(1, $this->id);
    
    $stmt->execute();
    return $stmt;
}

public function getInfo(){
    $sqlQuery = "SELECT * FROM ". $this->table_name ." WHERE speciality != ?";
    $stmt = $this->conn->prepare($sqlQuery);
    $this->brand=htmlspecialchars(strip_tags($this->brand));

    // bind given email value
    $stmt->bindParam(1, $this->brand);
    
    $stmt->execute();
    return $stmt;
}

public function createInfo(){
            
            $sqlQuery = "INSERT INTO ". $this->table_name ." SET
                                                            category_name= :category_name,
                                                            category_icon= :category_icon,
                                                            cat_image= :filename";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->category_name=htmlspecialchars(strip_tags($this->category_name));
            $this->category_icon=htmlspecialchars(strip_tags($this->category_icon));
            $this->filename=htmlspecialchars(strip_tags($this->filename));
        
            // bind data
            $stmt->bindParam(":category_name", $this->category_name);
            $stmt->bindParam(":category_icon", $this->category_icon);
            $stmt->bindParam(":filename", $this->filename);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
public function updateInfo(){
            $sqlQuery = "UPDATE ". $this->table_name ." SET
            category_name= :category_name,
            category_icon= :category_icon,
            cat_image= :filename WHERE category_id = :category_id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->category_name=htmlspecialchars(strip_tags($this->category_name));
            $this->category_icon=htmlspecialchars(strip_tags($this->category_icon));
            $this->filename=htmlspecialchars(strip_tags($this->filename));
            $this->category_id=htmlspecialchars(strip_tags($this->category_id));
        
            // bind data
            $stmt->bindParam(":category_name", $this->category_name);
            $stmt->bindParam(":category_icon", $this->category_icon);
            $stmt->bindParam(":filename", $this->filename);
            $stmt->bindParam(":category_id", $this->category_id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }


function Delete(){
            $sqlQuery = "DELETE FROM " . $this->table_name . " WHERE category_id = ?";
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