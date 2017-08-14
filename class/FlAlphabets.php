<?php
class FlAlphabets
{
	public $requests;
	public $dbh;
	
	public function  __construct($conn, $param) {
		$this->requests = $param;
		$this->dbh = $conn;
	}
  
	public function create($uuid, $index){
		$params = $this->requests;
		$db = $this->dbh;
		$query = "INSERT INTO fl_alphabets
					(id, char_index, alphabet, key_code, key_press, key_down, key_up)
					VALUES (:id, :char_index, :alphabet, :key_code, :key_press, :key_down, :key_up)";
		$keyCode = (int)$params['keyCode'];
		$stmt = $db->prepare($query);
		$stmt->bindParam(":id", $uuid, PDO::PARAM_STR); 
		$stmt->bindParam(":char_index", $index, PDO::PARAM_INT);
		$stmt->bindValue(":alphabet", chr($keyCode), PDO::PARAM_STR);
		$stmt->bindParam(":key_code", $keyCode, PDO::PARAM_INT);
		$stmt->bindParam(":key_press", $params['time1'], PDO::PARAM_STR);
		$stmt->bindParam(":key_down", $params['time2'], PDO::PARAM_STR);
		$stmt->bindParam(":key_up", $params['time3'], PDO::PARAM_STR);
		$stmt->execute();
	}
}

?>