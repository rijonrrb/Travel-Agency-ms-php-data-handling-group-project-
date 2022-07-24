<?php 

include "dbConnect.php";

function update($day1 , $place1 , $start,  $end , $meal,  $cuisine,  $day2,  $place2,  $start1 , $end1 , $meal1,  $cuisine1,  $day3 , $place3 , $start2 , $end2 , $meal2 , $cuisine2,$customerid )
{
	$conn = connect();
	$stmt = $conn->prepare("UPDATE TSCHEMA SET day1 = ?, place1 = ? , start = ?,  end0 = ?, meal = ?,  cuisine = ?, day2 = ?, place2 = ?,  start1 = ? , end1 = ? , meal1 = ?,  cuisine1 = ?,  day3 = ? , place3 = ?, start2 = ?, end2 = ?, meal2 = ?, cuisine2 = ? WHERE customerid = ?");
	$stmt->bind_param("sssssssssssssssssss",  $day1 , $place1 , $start,  $end0 , $meal,  $cuisine,  $day2,  $place2,  $start1 , $end1 , $meal1,  $cuisine1,  $day3 , $place3 , $start2 , $end2 , $meal2 , $cuisine2, $customerid,);
	return $stmt->execute();
}

?>