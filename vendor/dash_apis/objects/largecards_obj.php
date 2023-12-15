<?php
// 'user' object
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "largecards";
 
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
    $sqlQuery = "SELECT * FROM " . $this->table_name . " order by catalog_id desc";
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
            image= :filename,
            product_name= :product_name,
            about_price= :About_Price,
            primary_text= :primary_Text";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->	filename=htmlspecialchars(strip_tags($this->filename));
            $this->product_name=htmlspecialchars(strip_tags($this->product_name));
            $this->About_Price=htmlspecialchars(strip_tags($this->About_Price));
            $this->primary_Text=htmlspecialchars(strip_tags($this->primary_Text));
        
            // bind data
            $stmt->bindParam(":filename", $this->filename);
            $stmt->bindParam(":product_name", $this->product_name);
            $stmt->bindParam(":About_Price", $this->About_Price);
            $stmt->bindParam(":primary_Text", $this->primary_Text);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
public function updateInfo(){
            $sqlQuery = "UPDATE ". $this->table_name ." SET
            image= :filename,
            product_name= :product_name,
            about_price= :About_Price,
            primary_text= :primary_Text WHERE largecards_id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
               // sanitize
               $this->filename=htmlspecialchars(strip_tags($this->filename));
               $this->product_name=htmlspecialchars(strip_tags($this->product_name));
               $this->About_Price=htmlspecialchars(strip_tags($this->About_Price));
               $this->primary_Text=htmlspecialchars(strip_tags($this->primary_Text));
               $this->id=htmlspecialchars(strip_tags($this->id));
           
               // bind data
               $stmt->bindParam(":filename", $this->filename);
               $stmt->bindParam(":product_name", $this->product_name);
               $stmt->bindParam(":About_Price", $this->About_Price);
               $stmt->bindParam(":primary_Text", $this->primary_Text);
               $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }


function Delete(){
            $sqlQuery = "DELETE FROM " . $this->table_name . " WHERE largecards_id = ?";
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