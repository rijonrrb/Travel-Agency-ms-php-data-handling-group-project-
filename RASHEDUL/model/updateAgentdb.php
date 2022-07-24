<?php
include'../RASHEDUL/model/dbConnect.php';
  function updateAgent($name,$phone,$email,$id){
	$conn = connect();
	$stmt = $conn->prepare("UPDATE agent SET name = ? , phone = ? , email = ? WHERE id = ?");
	$stmt->bind_param("ssss",$name,$phone,$email,$id);
	$res = $stmt->execute();
	return $res;
}
function get(){
			$conn = connect();
	$query = $conn->prepare("SELECT * FROM agent WHERE id = ?");
	//$query->bind_param("ss",$userName,$password);
	$query->execute();
	$result = $query->get_result();
	return $result->fetch_assoc();
}
?>