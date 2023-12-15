<?php
// 'user' object
class User
{

	// database connection and table name
	private $conn;
	private $table_name = "admin";

	// object properties
	public $id;
	public $name;
	public $email;
	public $password;

	// constructor
	public function __construct($db)
	{
		$this->conn = $db;
	}

	public function getData()
	{
		$sqlQuery = "SELECT * FROM " . $this->table_name . "";
		$stmt = $this->conn->prepare($sqlQuery);
		$stmt->execute();
		echo '<pre>'.print_r($stmt).'</pre>';exit;
		return $stmt;
	}
	// check if given email exist in the database
	function emailExists()
	{

		// query to check if email exists
		$query = "SELECT * FROM " . $this->table_name . "
			WHERE email = ?
			LIMIT 0,1";

		// prepare the query
		$stmt = $this->conn->prepare($query);

		// sanitize
		$this->email = htmlspecialchars(strip_tags($this->email));

		// bind given email value
		$stmt->bindParam(1, $this->email);

		// execute the query
		$stmt->execute();

		// get number of rows
		$num = $stmt->rowCount();

		// if email exists, assign values to object properties for easy access and use for php sessions
		if ($num > 0) {

			// get record details / values
			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			// assign values to object properties
			$this->id = $row['id'];
			$this->name = $row['name'];
			$this->password = $row['password'];

			// return true because email exists in the database
			return true;
		}

		// return false if email does not exist in the database
		return false;
	}

	public function updateInfo()
	{
		$sqlQuery = "UPDATE " . $this->table_name . " SET
													speciality= :brand,
													speciality_image= :filename WHERE speciality_id = :id";

		$stmt = $this->conn->prepare($sqlQuery);

		// sanitize
		$this->brand = htmlspecialchars(strip_tags($this->brand));
		$this->filename = htmlspecialchars(strip_tags($this->filename));
		$this->id = htmlspecialchars(strip_tags($this->id));

		// bind data
		$stmt->bindParam(":brand", $this->brand);
		$stmt->bindParam(":filename", $this->filename);
		$stmt->bindParam(":id", $this->id);

		if ($stmt->execute()) {
			return true;
		}
		return false;
	}
}
