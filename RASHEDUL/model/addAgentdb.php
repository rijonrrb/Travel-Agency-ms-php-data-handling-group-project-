<?php
include'../RASHEDUL/model/dbConnect.php';
  function addAgent($name,$phone,$email,$nid,$image){
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO agent(name,phone,email,nid,image) VALUES(?,?,?,?,?)");
	$stmt->bind_param("sssss",$name,$phone,$email,$nid,$image);
	$res = $stmt->execute();
	return $res;
}
?>