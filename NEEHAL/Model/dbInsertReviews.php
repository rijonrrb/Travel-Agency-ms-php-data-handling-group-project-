<?php 

include "dbConnect.php";

function addreviews($customerid, $coop , $coop2 , $behave,  $behave2 , $rate,  $rate2,  $feedback )
{
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO REVIEWSINSERT(customerid, coop , coop2 , behave,  behave2 , rate,  rate2, feedback ) VALUES(?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssss",$customerid, $coop , $coop2 , $behave,  $behave2 , $rate,  $rate2,  $feedback);

	return $stmt->execute();
}

?>