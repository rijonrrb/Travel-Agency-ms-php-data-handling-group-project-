<?php
include'../RASHEDUL/model/dbConnect.php';
  function updatePackage($duration,$price,$id){
	$conn = connect();
	$stmt = $conn->prepare("UPDATE package SET duration = ? , price = ?  WHERE id = ?");
	$stmt->bind_param("sss",$duration,$price,$id);
	$res = $stmt->execute();
	return $res;
}

?>