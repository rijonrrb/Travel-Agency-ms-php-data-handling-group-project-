<?php
//include'../RASHEDUL/model/adminregdb.php';
function get($userName){
	$conn = connect();
	$query = $conn->prepare("SELECT * FROM registration WHERE userName = ?");
	$query->bind_param("s",$userName);
	$query->execute();
	$result = $query->get_result();
	return $result->fetch_assoc();
}
?>