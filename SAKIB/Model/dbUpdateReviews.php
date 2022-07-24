<?php 

include "dbConnect.php";

function editRev($coop , $coop2,  $rate , $rate2,  $behave,  $behave2,  $feedback, $customerid )
{
	$conn = connect();
	$stmt = $conn->prepare("UPDATE REVIEWSINSERT SET coop = ? , coop2 = ?,  rate = ?, rate2 = ?,  behave = ?, behave2 = ?, feedback = ? WHERE customerid = ?");
	$stmt->bind_param("ssssssss" , $coop , $coop2,  $rate , $rate2,  $behave,  $behave2,  $feedback ,  $customerid);
	return $stmt->execute();
}

?>