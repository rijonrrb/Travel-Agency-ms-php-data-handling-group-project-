<?php
//include'../RASHEDUL/model/dbConnect.php';
  function register($fname,$lname,$gender,$dob,$religion,$praddress,$peaddress,$phone,$email,$userName,$password,$image){
	$conn = connect();
	$stmt = $conn->prepare("INSERT INTO registration(fname,lname,gender,dob,religion,praddress,peaddress,phone,email,userName,password,image) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssssssss",$fname,$lname,$gender,$dob,$religion,$praddress,$peaddress,$phone,$email,$userName,$password,$image);
	$res = $stmt->execute();
	return $res;
}

?>