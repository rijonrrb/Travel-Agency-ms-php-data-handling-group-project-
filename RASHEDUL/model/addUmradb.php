<?php
include'../RASHEDUL/model/dbConnect.php';
  function addUmra($name,$category,$duration,$price){
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO umra(name,category,duration,price) VALUES(?,?,?,?)");
	$stmt->bind_param("ssss",$name,$category,$duration,$price);
	$res = $stmt->execute();
	return $res;
}
?>