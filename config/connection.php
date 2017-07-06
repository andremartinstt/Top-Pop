<?php
	/*
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "toppop";

	$connection = mysqli_connect($host, $username, $password, $dbname);
	*/
	function conect(){
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbname = "toppop";

		$conn = new mysqli($host, $username, $password, $dbname);
		return $conn;
	}

	$connection = conect();

?>