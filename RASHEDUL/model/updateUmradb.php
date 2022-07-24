<?php
include'../RASHEDUL/model/dbConnect.php';
  function updateUmra($duration,$price,$id){
	$conn = connect();
	$stmt = $conn->prepare("UPDATE umra SET duration = ? , price = ?  WHERE id = ?");
	$stmt->bind_param("sss",$duration,$price,$id);
	$res = $stmt->execute();
	return $res;
}

?>