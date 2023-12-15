<?php
// 'user' object
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "slider";
 
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
    $sqlQuery = "SELECT * FROM " . $this->table_name . " order by id desc";
    $stmt = $this->conn->prepare($sqlQuery);
    $stmt->execute();
    return $stmt;
}

public function getsingleInfo(){
    $sqlQuery = "SELECT * FROM ". $this->table_name ." WHERE id = ?";
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
            background_image= :filename,
            image= :filename2,
            title= :slider_heading,
            content= :slider_content";
            $stmt = $this->conn->prepare($sqlQuery);
            // sanitize
            $this->	filename=htmlspecialchars(strip_tags($this->filename));
            $this->filename2=htmlspecialchars(strip_tags($this->filename2));
            $this->slider_heading=htmlspecialchars(strip_tags($this->slider_heading));
            $this->slider_content=htmlspecialchars(strip_tags($this->slider_content));
            // bind data
            $stmt->bindParam(":filename", $this->filename);
            $stmt->bindParam(":filename2", $this->filename2);
            $stmt->bindParam(":slider_heading", $this->slider_heading);
            $stmt->bindParam(":slider_content", $this->slider_content);
            if($stmt->execute()){
               return true;
            }
            return false;
        }
public function updateInfo(){
            $sqlQuery = "UPDATE ". $this->table_name ." SET
            background_image= :filename,
            image= :filename2,
            title= :slider_title,
            content= :slider_cont WHERE id = :id";
            $stmt = $this->conn->prepare($sqlQuery);
            // sanitize
            $this->	filename=htmlspecialchars(strip_tags($this->filename));
            $this->filename2=htmlspecialchars(strip_tags($this->filename2));
            $this->slider_title=htmlspecialchars(strip_tags($this->slider_title));
            $this->slider_cont=htmlspecialchars(strip_tags($this->slider_cont));
            $this->id=htmlspecialchars(strip_tags($this->id));
            // bind data
            $stmt->bindParam(":filename", $this->filename);
            $stmt->bindParam(":filename2", $this->filename2);
            $stmt->bindParam(":slider_title", $this->slider_title);
            $stmt->bindParam(":slider_cont", $this->slider_cont);
            $stmt->bindParam(":id", $this->id);
            if($stmt->execute()){
               return true;
            }
            return false;
        }
function Delete(){
            $sqlQuery = "DELETE FROM " . $this->table_name . " WHERE id = ?";
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