<?php
class User
{
	public $requests;
	public $dbh;
	
	public function  __construct($conn, $param) {
		$this->requests = $param;
		$this->dbh = $conn;
	}
  
	public function create($uuid){
		$params = $this->requests;
		$db = $this->dbh;
		$query = "INSERT INTO user
					(email, password, id)
					VALUES (:email, :password, :id)";
		$stmt = $db->prepare($query);
		$stmt->bindParam(":email", $params['email'], PDO::PARAM_STR);
		$stmt->bindParam(":password", $params['password'], PDO::PARAM_STR);
		$stmt->bindParam(":id", $uuid, PDO::PARAM_STR);
		$stmt->execute();
	}

	public static function get($conn, $email){
		$query = "SELECT * FROM user WHERE email = :email";
		$stmt = $conn->prepare($query); 
		$stmt->bindParam(":email", $email, PDO::PARAM_STR);

		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}

?>