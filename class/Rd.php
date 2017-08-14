<?php
class Rd
{
	public $requests;
	public $dbh;
	
	public function  __construct($conn, $param) {
		$this->requests = $param;
		$this->dbh = $conn;
	}
  
	public function create($uuid, $index, $wording){
		$params = $this->requests;
		$db = $this->dbh;
		$query = "INSERT INTO rd
					(id, word_index, wording)
					VALUES (:id, :word_index, :wording)";
		
		$stmt = $db->prepare($query);
		$stmt->bindParam(":id", $uuid, PDO::PARAM_STR); 
		$stmt->bindParam(":word_index", $index, PDO::PARAM_INT);
		$stmt->bindValue(":wording", $wording, PDO::PARAM_STR);
		$stmt->execute();
	}

	public static function getById($conn, $uuid){
		$query = "SELECT * FROM rd WHERE id = :id ";
		$order = "ORDER BY word_index ASC";
		$stmt = $conn->prepare($query.$order); 
		$stmt->bindParam(":id", $uuid, PDO::PARAM_STR);

		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

?>