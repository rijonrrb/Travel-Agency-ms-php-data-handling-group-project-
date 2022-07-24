<?php
    include 'dbconnectt.php';


    function reg($customerid, $fullname,$gender, $dob, $religion, $praddress, $peaddress, $phone,  $email, $package, $packagetime,$packageid,$paymentm, $payments)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO CUSD (customerid, fullname,gender, dob, religion, praddress, peaddress, phone, email, package, packagetime, packageid, paymentm, payments) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssssssssssssss",$customerid, $fullname, $gender, $dob, $religion, $praddress, $peaddress, $phone, $email, $package, $packagetime, $packageid, $paymentm, $payments);
     return $stmt->execute();

    } 
    function update($fullname,$gender, $dob, $religion, $praddress, $peaddress, $phone,  $email, $package, $packagetime,$packageid,$paymentm,$payments, $customerid)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE CUSD SET fullname = ?, gender= ?, dob= ?, religion= ?, praddress= ?, peaddress= ?, phone= ?, email= ? , package= ?, packagetime= ? , packageid= ?, paymentm= ? , payments= ? WHERE customerid = ?");
    $stmt->bind_param("ssssssssssssss",$fullname,$gender, $dob, $religion, $praddress, $peaddress, $phone,  $email, $package, $packagetime,$packageid,$paymentm, $payments, $customerid);
     return $stmt->execute();
    }

    function getAllUsers()
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM CUSD");
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }
    function getUsers($customerid)
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM CUSD WHERE customerid = ?");
    $stmt->bind_param("s",$customerid);
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }
    function delete($listID)
    {
    $conn = connect();
    $stmt = $conn->prepare("DELETE FROM CUSD WHERE listID = ?");
    $stmt->bind_param("i",$listID);
    $stmt->execute();
    }
?>