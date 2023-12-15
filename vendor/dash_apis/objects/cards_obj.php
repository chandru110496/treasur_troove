<?php
// 'user' object
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "bid_product_details";
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
    $sqlQuery = "SELECT * FROM " . $this->table_name . " order by cards_id desc";
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
            product_name= :product_name,
            product_image1= :filename,
            product_image2= :filename2,
            product_image3= :filename3,
            product_image4= :filename4,
            product_image5= :filename5,
            category_id= :category_name,
            sub_category_id= :subcategory_name,
            product_new_price= :price,
            product_old_price= :old_price,
            brand_name= :brand_name,
            product_description= :description,
            specification= :specification,
            hours= :hours,
            min= :min,
            sec= :sec
            ";       
            $stmt = $this->conn->prepare($sqlQuery);
             // sanitize
             $this->product_name=htmlspecialchars(strip_tags($this->product_name));
             $this->filename=htmlspecialchars(strip_tags($this->filename));
             $this->filename2=htmlspecialchars(strip_tags($this->filename2));
             $this->filename3=htmlspecialchars(strip_tags($this->filename3));
             $this->filename4=htmlspecialchars(strip_tags($this->filename4));
             $this->filename5=htmlspecialchars(strip_tags($this->filename5));
             $this->category_name=htmlspecialchars(strip_tags($this->category_name));
             $this->subcategory_name=htmlspecialchars(strip_tags($this->subcategory_name));            
             $this->price=htmlspecialchars(strip_tags($this->price));
             $this->old_price=htmlspecialchars(strip_tags($this->old_price));
             $this->brand_name=htmlspecialchars(strip_tags($this->brand_name));
             $this->description=htmlspecialchars(strip_tags($this->description));
             $this->specification=htmlspecialchars(strip_tags($this->specification));
             $this->hours=htmlspecialchars(strip_tags($this->hours));
             $this->min=htmlspecialchars(strip_tags($this->min));
             $this->sec=htmlspecialchars(strip_tags($this->sec));
            // bind data
            $stmt->bindParam(":product_name", $this->product_name);
            $stmt->bindParam(":filename", $this->filename);
            $stmt->bindParam(":filename2", $this->filename2);
            $stmt->bindParam(":filename3", $this->filename3);
            $stmt->bindParam(":filename4", $this->filename4);
            $stmt->bindParam(":filename5", $this->filename5);
            $stmt->bindParam(":category_name", $this->category_name);
            $stmt->bindParam(":subcategory_name", $this->subcategory_name);           
            $stmt->bindParam(":price", $this->price);
            $stmt->bindParam(":old_price", $this->old_price);
            $stmt->bindParam(":brand_name", $this->brand_name);
            $stmt->bindParam(":description", $this->description);
            $stmt->bindParam(":specification", $this->specification);
            $stmt->bindParam(":hours", $this->hours);
            $stmt->bindParam(":min", $this->min);
            $stmt->bindParam(":sec", $this->sec);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
public function updateInfo(){
            $sqlQuery = "UPDATE ". $this->table_name ." SET
            product_name= :product_name,
            product_image1= :filename,
            product_image2= :filename2,
            product_image3= :filename3,
            product_image4= :filename4,
            product_image5= :filename5,
            category_id= :category_name,
            sub_category_id= :subcategory_name,
            category_id= :category_id,
            
            product_new_price= :price,
            product_old_price= :old_price,
            brand_name= :brand_name,
            product_description= :description,
            specification= :specification,
            hours= :hours,
            min= :min,
            sec= :sec
            WHERE cards_id = :cards_id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
           // sanitize
           $this->product_name=htmlspecialchars(strip_tags($this->product_name));
           $this->filename=htmlspecialchars(strip_tags($this->filename));
           $this->filename2=htmlspecialchars(strip_tags($this->filename2));
           $this->filename3=htmlspecialchars(strip_tags($this->filename3));
           $this->filename4=htmlspecialchars(strip_tags($this->filename4));
           $this->filename5=htmlspecialchars(strip_tags($this->filename5));
           $this->category_name=htmlspecialchars(strip_tags($this->category_name));
           $this->subcategory_name=htmlspecialchars(strip_tags($this->subcategory_name));
           $this->category_id=htmlspecialchars(strip_tags($this->category_id));
           
           $this->price=htmlspecialchars(strip_tags($this->price));
           $this->old_price=htmlspecialchars(strip_tags($this->old_price));
           $this->brand_name=htmlspecialchars(strip_tags($this->brand_name));
           $this->description=htmlspecialchars(strip_tags($this->description));
           $this->specification=htmlspecialchars(strip_tags($this->specification));
           $this->hours=htmlspecialchars(strip_tags($this->hours));
           $this->min=htmlspecialchars(strip_tags($this->min));
           $this->sec=htmlspecialchars(strip_tags($this->sec));
           $this->cards_id=htmlspecialchars(strip_tags($this->cards_id));

        
           // bind data
           $stmt->bindParam(":product_name", $this->product_name);
           $stmt->bindParam(":filename", $this->filename);
           $stmt->bindParam(":filename2", $this->filename2);
           $stmt->bindParam(":filename3", $this->filename3);
           $stmt->bindParam(":filename4", $this->filename4);
           $stmt->bindParam(":filename5", $this->filename5);
           $stmt->bindParam(":category_name", $this->category_name);
           $stmt->bindParam(":subcategory_name", $this->subcategory_name);
           $stmt->bindParam(":category_id", $this->category_id);
           
           $stmt->bindParam(":price", $this->price);
           $stmt->bindParam(":old_price", $this->old_price);
           $stmt->bindParam(":brand_name", $this->brand_name);
           $stmt->bindParam(":description", $this->description);
           $stmt->bindParam(":specification", $this->specification);
           $stmt->bindParam(":hours", $this->hours);
           $stmt->bindParam(":min", $this->min);
           $stmt->bindParam(":sec", $this->sec);
           $stmt->bindParam(":cards_id", $this->cards_id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }


function Delete(){
            $sqlQuery = "DELETE FROM " . $this->table_name . " WHERE cards_id = ?";
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