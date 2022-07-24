<?php
include'../RASHEDUL/model/dbConnect.php';
  function updateContact($address,$phone,$email,$web,$ytube,$fb){
	$conn = connect();
	$stmt = $conn->prepare("UPDATE officecontact SET address = ? , phone = ? , web = ? , email = ? , youtube = ? , fb = ?");
	$stmt->bind_param("ssssss",$address,$phone,$web,$email,$ytube,$fb);
	$res = $stmt->execute();
	return $res;
}
function get(){
			$conn = connect();
	$query = $conn->prepare("SELECT * FROM officecontact ");
	//$query->bind_param("ss",$userName,$password);
	$query->execute();
	$result = $query->get_result();
	return $result->fetch_assoc();
}

?>