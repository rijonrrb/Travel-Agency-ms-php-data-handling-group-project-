<?php 

include "dbConnect.php";

function add($customerid, $day1 , $place1 , $start,  $end0 , $meal,  $cuisine,  $day2,  $place2,  $start1 , $end1 , $meal1,  $cuisine1,  $day3 , $place3 , $start2 , $end2 , $meal2 , $cuisine2 )
{
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO TSCHEMA(customerid, day1 , place1 , start,  end0 , meal,  cuisine, day2, place2,  start1 , end1 , meal1,  cuisine1,  day3 , place3 , start2 , end2 , meal2 , cuisine2 ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssssssssssssssss",$customerid, $day1 , $place1 , $start,  $end0 , $meal,  $cuisine,  $day2,  $place2,  $start1 , $end1 , $meal1,  $cuisine1,  $day3 , $place3 , $start2 , $end2 , $meal2 , $cuisine2);
	return $stmt->execute();
}

?>