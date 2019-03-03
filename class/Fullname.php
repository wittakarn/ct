<?php
class Fullname
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
			$query = "INSERT INTO fullname(id, 
									idx, 
									raw_data, 
									key_down, 
									key_up, 
									offset_x, 
									offset_y, 
									page_x, 
									page_y, 
									pressure, 
									radius, 
									do_alpha, 
									do_beta, 
									do_gamma, 
									do_absolute, 
									dm_x, 
									dm_y, 
									dm_z, 
									dm_gx, 
									dm_gy, 
									dm_gz, 
									dm_alpha, 
									dm_beta, 
									dm_gamma) VALUES 
									(:id, 
									:idx, 
									:raw_data, 
									:key_down, 
									:key_up, 
									:offset_x, 
									:offset_y, 
									:page_x, 
									:page_y, 
									:pressure, 
									:radius, 
									:do_alpha, 
									:do_beta, 
									:do_gamma, 
									:do_absolute, 
									:dm_x, 
									:dm_y, 
									:dm_z, 
									:dm_gx, 
									:dm_gy, 
									:dm_gz, 
									:dm_alpha, 
									:dm_beta, 
									:dm_gamma)";
			$stmt = $db->prepare($query);
			$stmt->bindParam(":id", $params['uuid'], PDO::PARAM_STR); 
			$stmt->bindValue(":idx", $index, PDO::PARAM_INT);
			$stmt->bindParam(":raw_data", $array[$x]['value'], PDO::PARAM_STR);
			$stmt->bindParam(":key_down", $array[$x]['keyDown'], PDO::PARAM_STR);
			$stmt->bindParam(":key_up", $array[$x]['keyUp'], PDO::PARAM_STR);
			$stmt->bindParam(":offset_x", $array[$x]['offsetX'], PDO::PARAM_STR);
			$stmt->bindParam(":offset_y", $array[$x]['offsetY'], PDO::PARAM_STR);
			$stmt->bindParam(":page_x", $array[$x]['pageX'], PDO::PARAM_STR);
			$stmt->bindParam(":page_y", $array[$x]['pageY'], PDO::PARAM_STR);
			$stmt->bindParam(":pressure", $array[$x]['force'], PDO::PARAM_STR);
			$stmt->bindParam(":radius", $array[$x]['radius'], PDO::PARAM_STR);
			$stmt->bindParam(":do_alpha", $array[$x]['doAlpha'], PDO::PARAM_STR);
			$stmt->bindParam(":do_beta", $array[$x]['doBeta'], PDO::PARAM_STR);
			$stmt->bindParam(":do_gamma", $array[$x]['doGamma'], PDO::PARAM_STR);
			$stmt->bindParam(":do_absolute", $array[$x]['doAbsolute'], PDO::PARAM_STR);
			$stmt->bindParam(":dm_x", $array[$x]['dmX'], PDO::PARAM_STR);
			$stmt->bindParam(":dm_y", $array[$x]['dmY'], PDO::PARAM_STR);
			$stmt->bindParam(":dm_z", $array[$x]['dmZ'], PDO::PARAM_STR);
			$stmt->bindParam(":dm_gx", $array[$x]['dmGx'], PDO::PARAM_STR);
			$stmt->bindParam(":dm_gy", $array[$x]['dmGy'], PDO::PARAM_STR);
			$stmt->bindParam(":dm_gz", $array[$x]['dmGz'], PDO::PARAM_STR);
			$stmt->bindParam(":dm_alpha", $array[$x]['dmAlpha'], PDO::PARAM_STR);
			$stmt->bindParam(":dm_beta", $array[$x]['dmBeta'], PDO::PARAM_STR);
			$stmt->bindParam(":dm_gamma", $array[$x]['dmGamma'], PDO::PARAM_STR);

			$stmt->execute();
		} 
	}
}

?>