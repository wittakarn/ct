<?php
class Phone
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

		$array = json_decode($params['eventData'], true );
		$arraySize = sizeof($array);
		for ($x = 0; $x < $arraySize; $x++) {
			$index = $x + 1;
			$query = "INSERT INTO phone(email, idx, raw_data, key_down, key_up, offset_x, offset_y, page_x, page_y, pressure) VALUES 
												(:email, :idx, :raw_data, :key_down, :key_up, :offset_x, :offset_y, :page_x, :page_y, :pressure)";
			$stmt = $db->prepare($query);
			$stmt->bindParam(":email", $params['email'], PDO::PARAM_STR); 
			$stmt->bindValue(":idx", $index, PDO::PARAM_INT);
			$stmt->bindParam(":raw_data", $array[$x]['value'], PDO::PARAM_STR);
			$stmt->bindParam(":key_down", $array[$x]['keyDown'], PDO::PARAM_STR);
			$stmt->bindParam(":key_up", $array[$x]['keyUp'], PDO::PARAM_STR);
			$stmt->bindParam(":offset_x", $array[$x]['offsetX'], PDO::PARAM_STR);
			$stmt->bindParam(":offset_y", $array[$x]['offsetY'], PDO::PARAM_STR);
			$stmt->bindParam(":page_x", $array[$x]['pageX'], PDO::PARAM_STR);
			$stmt->bindParam(":page_y", $array[$x]['pageY'], PDO::PARAM_STR);
			$stmt->bindParam(":pressure", $array[$x]['force'], PDO::PARAM_STR);
			$stmt->execute();
		} 
	}
}

?>