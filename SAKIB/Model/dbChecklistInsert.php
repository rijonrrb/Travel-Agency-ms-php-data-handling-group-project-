<?php 

include "dbConnect.php";

function addchecklist($customerid, $scheduledplace , $scheduledtime , $recommendedtrans,  $customernumber , $recommendedcuisine,  $spot1,  $spot2,  $spot3 )
{
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO CHECKLISTSINSERT(customerid, scheduledplace , scheduledtime , recommendedtrans,  customernumber , recommendedcuisine,  spot1, spot2, spot3) VALUES(?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssssss",$customerid, $scheduledplace , $scheduledtime , $recommendedtrans,  $customernumber , $recommendedcuisine,  $spot1,  $spot2,  $spot3);

	return $stmt->execute();
}

?>