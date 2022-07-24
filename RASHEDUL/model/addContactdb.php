<?php
include'../RASHEDUL/model/dbConnect.php';
  function addContact($address,$phone,$web,$email,$ytube,$fb){
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO officecontact(address,phone,web,email,youtube,fb) VALUES(?,?,?,?,?,?)");
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
	return $result->num_rows;
}


?>