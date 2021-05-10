<?php
	$mysqli = false;
	function connectDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "", "mysitebase");
		$mysqli -> query("SET NAMES 'utf-8'");
		$mysqli -> query("SET CHARACTER SET 'utf-8'");
		$mysqli -> query("SET SESSION collation_connection = 'utf8_general_ci'");
	}
	
	function closeDB(){
		global $mysqli;
		$mysqli -> close();
	}
	
	function getNews($limit){
		global $mysqli; 
		connectDB();
		$result =$mysqli ->query("SELECT * FROM `news` ORDER BY `id` DESC LIMIT $limit");
		closeDB();
		return resultToArray($result);
	}
	
	function resultToArray($result){
		$array = array();
		while(($row = $result -> fetch_assoc())!= false){
			$array[] = $row;
			
		}
		return $array;
		
	}


?>