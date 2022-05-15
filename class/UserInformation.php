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
		$query = "INSERT INTO user_information(email, name, phone, gender, age, education, faculty, occupation, favorite_color) VALUES 
												(:email, :name, :phone, :gender, :age, :education, :faculty, :occupation, :favorite_color)";
		$stmt = $db->prepare($query);
		$stmt->bindParam(":email", $params['email'], PDO::PARAM_STR); 
		$stmt->bindParam(":name", $params['name'], PDO::PARAM_STR);
		$stmt->bindParam(":phone", $params['phone'], PDO::PARAM_STR);
		$stmt->bindParam(":gender", $params['gender'], PDO::PARAM_INT);
		$stmt->bindParam(":age", $params['age'], PDO::PARAM_INT);
		$stmt->bindParam(":education", $params['education'], PDO::PARAM_INT);
		$stmt->bindParam(":faculty", $params['faculty'], PDO::PARAM_INT);
		$stmt->bindParam(":occupation", $params['occupation'], PDO::PARAM_INT);
		$stmt->bindParam(":favorite_color", $params['favoriteColor'], PDO::PARAM_STR);
		$stmt->execute();
	}

	public static function updatePhone($conn, $id, $phone){
		$query = "UPDATE user_information SET phone = :phone ";
		$query .= "WHERE id = :id";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(":id", $id, PDO::PARAM_STR); 
		$stmt->bindParam(":phone", $phone, PDO::PARAM_STR);
		$stmt->execute();
	}

	public static function updateName($conn, $id, $fullname){
		$query = "UPDATE user_information SET name = :name ";
		$query .= "WHERE id = :id";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(":id", $id, PDO::PARAM_STR); 
		$stmt->bindParam(":name", $fullname, PDO::PARAM_STR);
		$stmt->execute();
	}

	public static function updateEmail($conn, $id, $email){
		$query = "UPDATE user_information SET email = :email ";
		$query .= "WHERE id = :id";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(":id", $id, PDO::PARAM_STR); 
		$stmt->bindParam(":email", $email, PDO::PARAM_STR);
		$stmt->execute();
	}

	public static function getRoundCount($conn, $id){
		$query = "SELECT round_count FROM user_information WHERE id = :id ";
		$stmt = $conn->prepare($query); 
		$stmt->bindParam(":id", $id, PDO::PARAM_STR); 

		$stmt->execute();
		$roundCount = $stmt->fetch(PDO::FETCH_ASSOC);
		return $roundCount['round_count'];
	}

	public static function updateRoundCount($conn, $id){
		$query = "UPDATE user_information SET round_count = :roundCount ";
		$query .= "WHERE id = :id";
		$stmt = $conn->prepare($query);
		$stmt->bindParam(":id", $id, PDO::PARAM_STR);
		$stmt->bindValue(":roundCount", self::getRoundCount($conn, $id) + 1, PDO::PARAM_INT);
		$stmt->execute();
	}

	public function createInfoForMobile($uuid){
		$params = $this->requests;
		$db = $this->dbh;
		$query = "INSERT INTO user_information(id, gender, age, education, occupation, posture, round_count, device) VALUES 
												(:id, :gender, :age, :education, :occupation, :posture, :roundCount, :device)";
		$stmt = $db->prepare($query);
		$stmt->bindValue(":id", $uuid, PDO::PARAM_STR); 
		$stmt->bindParam(":gender", $params['gender'], PDO::PARAM_INT);
		$stmt->bindParam(":age", $params['age'], PDO::PARAM_INT);
		$stmt->bindParam(":education", $params['education'], PDO::PARAM_INT);
		$stmt->bindParam(":occupation", $params['occupation'], PDO::PARAM_INT);
		$stmt->bindParam(":posture", $params['posture'], PDO::PARAM_INT);
		$stmt->bindValue(":roundCount", 0, PDO::PARAM_INT);
		$stmt->bindValue(":device", $_SERVER['HTTP_USER_AGENT'], PDO::PARAM_STR);
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