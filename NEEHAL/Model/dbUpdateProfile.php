<?php
  
include "dbConnect.php";

    function updateProfile($fname, $lname,$dob, $gender, $nationality, $phone, $username)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE TOURGUIDE SET fname = ?, lname= ?, dob= ?, gender= ?, nationality= ?, phone= ? WHERE username = ?");
    $stmt->bind_param("sssssss",$fname, $lname, $dob, $gender, $nationality ,$phone, $username);
     return $stmt->execute();
    }
?>