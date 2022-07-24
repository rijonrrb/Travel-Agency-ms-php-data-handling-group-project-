<?php
include'../RASHEDUL/model/dbConnect.php';
function login($userName,$password)
{
	$conn = connect();
	$query = $conn->prepare("SELECT * FROM registration WHERE userName = ? and password = ?");
	$query->bind_param("ss",$userName,$password);
	$query->execute();
	$result = $query->get_result();
	return $result->fetch_assoc();
}
?>