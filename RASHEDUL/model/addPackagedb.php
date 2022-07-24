<?php
include'../RASHEDUL/model/dbConnect.php';
  function addPackage($destination,$duration,$price){
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO package(destination,duration,price) VALUES(?,?,?)");
	$stmt->bind_param("sss",$destination,$duration,$price);
	$res = $stmt->execute();
	return $res;
}
?>