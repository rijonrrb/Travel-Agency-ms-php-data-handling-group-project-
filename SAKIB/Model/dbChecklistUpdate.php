<?php 

include "dbConnect.php";

function editchecklist( $scheduledplace , $scheduledtime,  $recommendedtrans , $customernumber,  $recommendedcuisine,  $spot1,  $spot2,  $spot3, $customerid)
{
	$conn = connect();
	$stmt = $conn->prepare("UPDATE CHECKLISTSINSERT SET scheduledplace = ? , scheduledtime = ?,  recommendedtrans = ?, customernumber = ?,  recommendedcuisine = ?, spot1 = ?, spot2 = ?,  spot3 = ?  WHERE customerid = ?");
	$stmt->bind_param("sssssssss", $scheduledplace , $scheduledtime,  $recommendedtrans , $customernumber,  $recommendedcuisine,  $spot1,  $spot2,  $spot3, $customerid );
	return $stmt->execute();
}

?>