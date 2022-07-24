<?php
    include 'dbconnectt.php';

    function login($username, $password)
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM MANAGER WHERE username = ? and password = ?");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->num_rows === 1;
    }

    function reg($fname, $lname,$fullname, $gender, $dob, $religion, $praddress, $peaddress,  $phone, $email, $username, $password)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO MANAGER (fname, lname,fullname, gender, dob, religion, praddress, peaddress, phone, email, username, password) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssssssssssss",$fname, $lname, $fullname, $gender, $dob, $religion, $praddress, $peaddress, $phone, $email, $username, $password);
     return $stmt->execute();

    } 
    function update($fname, $lname,$fullname, $gender, $dob, $religion, $praddress, $peaddress,  $phone, $email, $username)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE MANAGER SET fname = ?, lname= ?, fullname= ?, gender= ?, dob= ?, religion= ?, praddress= ?, peaddress= ?, phone= ? , email= ? WHERE username = ?");
    $stmt->bind_param("sssssssssss",$fname, $lname, $fullname, $gender, $dob, $religion, $praddress, $peaddress, $phone, $email, $username);
     return $stmt->execute();
    }

    function pass($password, $username, $passwordo)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE MANAGER SET password = ? WHERE username = ? and password = ?");
    $stmt->bind_param("sss",$password, $username, $passwordo);
     return $stmt->execute();
    }
?>