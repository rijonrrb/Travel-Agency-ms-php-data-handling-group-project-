<?php 

 

include "DbConnect.php";

 

function hotelandtransportation($hpref , $rpref , $rcin ,$rcout, $tpref,$ttime )
{
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO customersignup(hpref , rpref , rcin ,rcout, tpref,ttime) VALUES(?,?,?,?,?,?)");
    $stmt->bind_param("ssssss",$hpref , $rpref , $rcin ,$rcout, $tpref,$ttime);

 

    return $stmt->execute();
}

 

?>