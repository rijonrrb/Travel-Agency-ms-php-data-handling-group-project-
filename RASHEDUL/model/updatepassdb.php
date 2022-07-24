<?php
include'../RASHEDUL/model/dbConnect.php';
  function updatePass($userName,$password){
	$conn = connect();
	$stmt = $conn->prepare("UPDATE registration SET password = ? WHERE userName = ?");
	$stmt->bind_param("ss",$password,$userName);
	$res = $stmt->execute();
	return $res;
}

?>