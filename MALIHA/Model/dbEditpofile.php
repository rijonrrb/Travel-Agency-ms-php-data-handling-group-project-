<?php
  
include "dbConnect.php";

 

    function updateProfile($fname , $lname , $dob , $gender, $nationality ,$password ,$username , $phone ,$email ,$paddress ,$peraddress ,$websitelink, $username)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE CUSTOMERSIGNUP SET fname = ?, lname= ?, dob= ?, gender= ?, nationality= ?, password= ?,phone= ?,email= ?,paddress= ?,peraddress= ?,websitelink= ? WHERE username = ? ");
    $stmt->bind_param("sssssssssssss",$fname , $lname , $dob , $gender, $nationality ,$password ,$username , $phone ,$email ,$paddress ,$peraddress ,$websitelink, $username);
     return $stmt->execute();
    }
?>