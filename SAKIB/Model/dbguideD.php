<?php
    include 'dbconnectt.php';


    function reg($guideid, $fullname,$gender, $dob, $religion, $Praddress, $Peaddress, $phone,  $email, $country, $region,$type,$timee)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO TGUIDED (guideid, fullname,gender, dob, religion, Praddress, Peaddress, phone, email, country, region, type,timee) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("issssssssssss",$guideid, $fullname,$gender, $dob, $religion, $Praddress, $Peaddress, $phone,  $email, $country, $region,$type,$timee);
     return $stmt->execute();

    } 
    function update($fullname,$gender, $dob, $religion, $Praddress, $Peaddress, $phone,  $email, $country, $region,$type,$timee, $guideid)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE TGUIDED SET fullname = ?, gender= ?, dob= ?, religion= ?, Praddress= ?, Peaddress= ?, phone= ?, email= ? , country= ?, region= ? , type= ?, timee= ? WHERE guideid = ?");
    $stmt->bind_param("ssssssssssssi",$fullname,$gender, $dob, $religion, $Praddress, $Peaddress, $phone,  $email, $country, $region,$type,$timee, $guideid);
     return $stmt->execute();
    }

    function getAllUsers()
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM TGUIDED");
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }
    function getUsers($guideid)
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM TGUIDED WHERE guideid = ?");
    $stmt->bind_param("s",$customerid);
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }
    function delete($guideid)
    {
    $conn = connect();
    $stmt = $conn->prepare("DELETE FROM TGUIDED WHERE guideid = ?");
    $stmt->bind_param("i",$guideid);
    $stmt->execute();
    }
?>