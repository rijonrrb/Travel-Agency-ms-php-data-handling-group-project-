<?php
include'../RASHEDUL/model/dbConnect.php';
  function updateProfile($fname,$lname,$phone,$email,$userName,$password){
	$conn = connect();
	$stmt = $conn->prepare("UPDATE registration SET fname = ? ,lname = ? ,phone = ? ,email = ? WHERE userName = ? and password = ?");
	$stmt->bind_param("ssssss",$fname,$lname,$phone,$email,$userName,$password);
	$res = $stmt->execute();
	return $res;
}

?>