<?php
// 'user' object
class User
{

    // database connection and table name
    private $conn;
    private $table_name = "sub_category";

    // object properties
    //    public $id;
    //    public $brand;
    //    public $image;
    //    public $speciality_status;

    // constructor
    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getData()
    {
        $sqlQuery = "SELECT * FROM " . $this->table_name . " JOIN category ON sub_category.category_id=category.category_id order by sub_category_id desc";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
    public function getDatabyId($id = null)
    {
        $sqlQuery = "SELECT * FROM " . $this->table_name . " JOIN category ON sub_category.category_id=category.category_id where sub_category.category_id = $id order by sub_category_id desc";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    public function getsingleInfo()
    {
        $sqlQuery = "SELECT * FROM " . $this->table_name . " WHERE speciality_id = ?";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->id = htmlspecialchars(strip_tags($this->id));

        // bind given email value
        $stmt->bindParam(1, $this->id);

        $stmt->execute();
        return $stmt;
    }

    public function getInfo()
    {
        $sqlQuery = "SELECT * FROM " . $this->table_name . "  WHERE speciality != ?";
        $stmt = $this->conn->prepare($sqlQuery);
        $this->brand = htmlspecialchars(strip_tags($this->brand));

        // bind given email value
        $stmt->bindParam(1, $this->brand);

        $stmt->execute();
        return $stmt;
    }

    public function createInfo()
    {

        
        $sqlQuery = "INSERT INTO " . $this->table_name . " SET
                                                            category_id = :category_id ,
                                                            sub_category_name = :subcategory_name,
                                                            subcategoty_image= :filename";

        $stmt = $this->conn->prepare($sqlQuery);

        // sanitize
        $this->category_id = htmlspecialchars(strip_tags($this->category_id));
        $this->subcategory_name = htmlspecialchars(strip_tags($this->subcategory_name));
        $this->filename = htmlspecialchars(strip_tags($this->filename));

        // bind data
        $stmt->bindParam(":category_id", $this->category_id);
        $stmt->bindParam(":subcategory_name", $this->subcategory_name);
        $stmt->bindParam(":filename", $this->filename);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
    public function updateInfo()
    {
        $sqlQuery = "UPDATE " . $this->table_name . " SET
        sub_category_name= :subcategory_name,
        subcategoty_image= :filename WHERE sub_category_id = :sub_category_id";

        $stmt = $this->conn->prepare($sqlQuery);

        // sanitize
        $this->subcategory_name = htmlspecialchars(strip_tags($this->subcategory_name));
        $this->filename = htmlspecialchars(strip_tags($this->filename));
        $this->sub_category_id = htmlspecialchars(strip_tags($this->sub_category_id));

        // bind data
        $stmt->bindParam(":subcategory_name", $this->subcategory_name);
        $stmt->bindParam(":filename", $this->filename);
        $stmt->bindParam(":sub_category_id", $this->sub_category_id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }


    function Delete()
    {
        $sqlQuery = "DELETE FROM " . $this->table_name . " WHERE sub_category_id = ?";
        $stmt = $this->conn->prepare($sqlQuery);

        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>