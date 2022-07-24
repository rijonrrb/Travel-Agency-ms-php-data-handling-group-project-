<?php
    include 'dbconnectt.php';


    function reg($visaid, $countryname,$visatype, $personaldocument, $professionaldocuments, $financialdocument, $overseasdocument, $protime,  $fess, $phone)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO VISAD (visaid, countryname,visatype, personaldocument, professionaldocuments, financialdocument, overseasdocument, protime, fess, phone) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssssssssss",$visaid, $countryname,$visatype, $personaldocument, $professionaldocuments, $financialdocument, $overseasdocument, $protime,  $fess, $phone);
     return $stmt->execute();

    } 
    function update($countryname,$visatype, $personaldocument, $professionaldocuments, $financialdocument, $overseasdocument, $protime,  $fess, $phone, $visaid)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE VISAD SET countryname = ?, visatype= ?, personaldocument= ?, professionaldocuments= ?, financialdocument= ?, overseasdocument= ?, protime= ?, fess= ? , phone= ? WHERE visaid = ?");
    $stmt->bind_param("ssssssssss",$countryname,$visatype, $personaldocument, $professionaldocuments, $financialdocument, $overseasdocument, $protime,  $fess, $phone, $visaid);
     return $stmt->execute();
    }

    function getAllUsers()
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM VISAD");
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }
    function getUsers($customerid)
    {
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM VISAD WHERE customerid = ?");
    $stmt->bind_param("s",$customerid);
    $stmt->execute();
    $records = $stmt->get_result();
    return $records->fetch_all(MYSQLI_ASSOC);
    }
?>