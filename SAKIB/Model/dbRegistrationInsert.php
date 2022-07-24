<?php 

include "dbConnect.php";

function registration($fname, $lname , $dob , $gender,  $nationality , $phone,  $username,  $password,  $email )
{
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO TOURGUIDE(fname, lname , dob , gender,  nationality , phone,  username, password, email ) VALUES(?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssssss",$fname, $lname , $dob , $gender,  $nationality , $phone,  $username,  $password,  $email);

	return $stmt->execute();
}

?>