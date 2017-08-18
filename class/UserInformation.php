<?php
class UserInformation
{
	public $requests;
	public $dbh;
	
	public function  __construct($conn, $param) {
		$this->requests = $param;
		$this->dbh = $conn;
	}
  
	public function create(){
		$params = $this->requests;
		$db = $this->dbh;
		$query = "INSERT INTO user_information(email, name, phone, gender, age, favorite_color) VALUES 
												(:email, :name, :phone, :gender, :age, :favorite_color)";
		$stmt = $db->prepare($query);
		$stmt->bindParam(":email", $params['email'], PDO::PARAM_STR); 
		$stmt->bindParam(":name", $params['name'], PDO::PARAM_STR);
		$stmt->bindParam(":phone", $params['phone'], PDO::PARAM_STR);
		$stmt->bindParam(":gender", $params['gender'], PDO::PARAM_INT);
		$stmt->bindParam(":age", $params['age'], PDO::PARAM_INT);
		$stmt->bindParam(":favorite_color", $params['favoriteColor'], PDO::PARAM_STR);
		$stmt->execute();
	}

	public static function get($conn, $email){
		$query = "SELECT * FROM user_information WHERE email = :email ";
		$stmt = $conn->prepare($query); 
		$stmt->bindParam(":email", $email, PDO::PARAM_STR);

		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}

?>