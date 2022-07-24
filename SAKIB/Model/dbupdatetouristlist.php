<?php 

include "dbConnect.php";

function editTlist($touristname , $touristmembers,  $visitingtime , $duration,  $phone, $touristid  )
{
	$conn = connect();
	$stmt = $conn->prepare("UPDATE TOURISTLISTINSERT SET touristname = ?, touristmembers = ?,  visitingtime = ?, duration = ?,  phone = ? WHERE touristid = ?");
	$stmt->bind_param("ssssss",  $touristname , $touristmembers,  $visitingtime , $duration,  $phone, $touristid);
	return $stmt->execute();
}

?>