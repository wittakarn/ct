<?php
class UserKey
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
		$query = "INSERT INTO user_key
					(id, email)
					VALUES (:id, :email)";
		$stmt = $db->prepare($query);
		$stmt->bindParam(":id", $uuid, PDO::PARAM_STR);
		$stmt->bindParam(":email", $params['email'], PDO::PARAM_STR);
		$stmt->execute();
	}

	public static function get($conn, $uuid){
		$query = "SELECT * FROM user_key WHERE id = :id ";
		$stmt = $conn->prepare($query); 
		$stmt->bindParam(":id", $uuid, PDO::PARAM_STR);

		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}

?>