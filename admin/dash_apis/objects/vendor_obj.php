<?php
// 'user' object
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "vendor_details";
 
    // object properties
//    public $id;
//    public $brand;
//    public $image;
//    public $speciality_status;
 
    // constructor
    public function __construct($db){
        $this->conn = $db;
    }
 
public function getData($type = null){
    if(!empty($type)){
        $sqlQuery = "SELECT * FROM " . $this->table_name ."  order by vendor_id desc";
    }else{
        $sqlQuery = "SELECT * FROM " . $this->table_name ." order by vendor_id desc";
    }

    $stmt = $this->conn->prepare($sqlQuery);
    $stmt->execute();
    return $stmt;
}
public function getDatabytype($id){
    $sqlQuery = "SELECT * FROM " . $this->table_name ." where product_details.category_id = :id order by product_id desc";
    $stmt = $this->conn->prepare($sqlQuery);
    $stmt->execute();
    return $stmt;
}
//edited by v
public function getDataById($id){
    $sqlQuery = "SELECT * FROM " . $this->table_name ." JOIN category ON product_details.category_id=category.category_id where product_details.product_id = :id order by product_id desc";
    $stmt = $this->conn->prepare($sqlQuery);
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
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
            image= :filename,
            name= :vendor_name,
            phone= :phone,
            email= :email,
            city= :city,
            state= :states,
            pincode= :pincode,
            address= :address,
            pan_no= :pan_number,
            pan_card_img= :pan_photo,
            aadhar_no= :aadhar_no,
            aadhar_front_img= :aadharimage1,
            aadhar_back_img= :aadharimage2,
            gst_no= :gst,
            gst_certificate_img= :gst_img,
            join_date= :join_date";

            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->filename=htmlspecialchars(strip_tags($this->filename));
            $this->vendor_name=htmlspecialchars(strip_tags($this->vendor_name));
            $this->phone=htmlspecialchars(strip_tags($this->phone));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->city=htmlspecialchars(strip_tags($this->city));
            $this->states=htmlspecialchars(strip_tags($this->states));
            $this->pincode=htmlspecialchars(strip_tags($this->pincode));
            $this->address=htmlspecialchars(strip_tags($this->address));
            $this->pan_number=htmlspecialchars(strip_tags($this->pan_number));
            $this->pan_photo=htmlspecialchars(strip_tags($this->pan_photo));
            $this->aadhar_no=htmlspecialchars(strip_tags($this->aadhar_no));
            $this->aadharimage1=htmlspecialchars(strip_tags($this->aadharimage1));
            $this->aadharimage2=htmlspecialchars(strip_tags($this->aadharimage2));
            $this->gst=htmlspecialchars(strip_tags($this->gst));
            $this->gst_img=htmlspecialchars(strip_tags($this->gst_img));
            $this->join_date=htmlspecialchars(strip_tags($this->join_date));
           

        
            // bind data
            $stmt->bindParam(":filename", $this->filename);
            $stmt->bindParam(":vendor_name", $this->vendor_name);
            $stmt->bindParam(":phone", $this->phone);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":city", $this->city);
            $stmt->bindParam(":states", $this->states);
            $stmt->bindParam(":pincode", $this->pincode);
            $stmt->bindParam(":address", $this->address);
            $stmt->bindParam(":pan_number", $this->pan_number);
            $stmt->bindParam(":pan_photo", $this->pan_photo);
            $stmt->bindParam(":aadhar_no", $this->aadhar_no);
            $stmt->bindParam(":aadharimage1", $this->aadharimage1);
            $stmt->bindParam(":aadharimage2", $this->aadharimage2);
            $stmt->bindParam(":gst", $this->gst);
            $stmt->bindParam(":gst_img", $this->gst_img);
            $stmt->bindParam(":join_date", $this->join_date);
          
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
public function updateInfo(){
            $sqlQuery = "UPDATE ". $this->table_name ." SET
            image= :filename,
            name= :vendor_name,
            phone= :phone,
            email= :email,
            city= :city,
            state= :states,
            pincode= :pincode,
            address= :address,
            pan_no= :pan_number,
            pan_card_img= :filename2,
            aadhar_no= :aadhar_no,
            aadhar_front_img= :filename3,
            aadhar_back_img= :filename4,
            gst_no= :gst,
            gst_certificate_img= :filename5 WHERE vendor_id = :vendor_id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->filename=htmlspecialchars(strip_tags($this->filename));
            $this->vendor_name=htmlspecialchars(strip_tags($this->vendor_name));
            $this->phone=htmlspecialchars(strip_tags($this->phone));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->city=htmlspecialchars(strip_tags($this->city));
            $this->states=htmlspecialchars(strip_tags($this->states));
            $this->pincode=htmlspecialchars(strip_tags($this->pincode));
            $this->address=htmlspecialchars(strip_tags($this->address));
            $this->pan_number=htmlspecialchars(strip_tags($this->pan_number));
            $this->filename2=htmlspecialchars(strip_tags($this->filename2));
            $this->aadhar_no=htmlspecialchars(strip_tags($this->aadhar_no));
            $this->filename3=htmlspecialchars(strip_tags($this->filename3));
            $this->filename4=htmlspecialchars(strip_tags($this->filename4));
            $this->gst=htmlspecialchars(strip_tags($this->gst));
            $this->filename5=htmlspecialchars(strip_tags($this->filename5));
            $this->vendor_id=htmlspecialchars(strip_tags($this->vendor_id));
        
            // bind data
            $stmt->bindParam(":filename", $this->filename);
            $stmt->bindParam(":vendor_name", $this->vendor_name);
            $stmt->bindParam(":phone", $this->phone);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":city", $this->city);
            $stmt->bindParam(":states", $this->states);
            $stmt->bindParam(":pincode", $this->pincode);
            $stmt->bindParam(":address", $this->address);
            $stmt->bindParam(":pan_number", $this->pan_number);
            $stmt->bindParam(":filename2", $this->filename2);
            $stmt->bindParam(":aadhar_no", $this->aadhar_no);
            $stmt->bindParam(":filename3", $this->filename3);
            $stmt->bindParam(":filename4", $this->filename4);
            $stmt->bindParam(":gst", $this->gst);
            $stmt->bindParam(":filename5", $this->filename5);
            $stmt->bindParam(":vendor_id", $this->vendor_id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }


function Delete(){
            $sqlQuery = "DELETE FROM " . $this->table_name . " WHERE vendor_id = ?";
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