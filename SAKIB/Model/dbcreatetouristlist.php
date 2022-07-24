<?php 

include "dbConnect.php";

function createTList($touristname, $touristid , $touristmembers , $visitingtime,  $duration , $phone)
{
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO TOURISTLISTINSERT(touristname, touristid , touristmembers , visitingtime,  duration , phone ) VALUES(?,?,?,?,?,?)");
	$stmt->bind_param("ssssss",$touristname, $touristid , $touristmembers , $visitingtime,  $duration , $phone);

	return $stmt->execute(); 
}

?>