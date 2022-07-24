<?php

	include 'DbConnect.php';

	function register($username, $password){
	$conn =connect ();
	var_dump($conn);
	$stmt= $conn->prepare ("INSERT INTO USERS (username, password )
		VALUES(?,?)");
	$stmt-> bind_param("ss",$username, $password);
	$username="mmm";
	$password="123";
	var_dump($res);
	
}
?>