<?php
    include 'dbconnectt.php';


    function reg($hotelname, $roomtype,$roomf, $htype, $comp, $hloc, $hprice, $vehiclemodel,  $vehiclearea, $vehicleseat, $vehicledur, $vehiclefee, $vehicleid)
    {
     $conn = connect();
     $stmt = $conn->prepare("INSERT INTO HNTD (hotelname, roomtype,roomf, htype, comp, hloc, hprice, vehiclemodel, vehiclearea, vehicleseat, vehicledur, vehiclefee, vehicleid) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt->bind_param("ssssssssssssi",$hotelname, $roomtype,$roomf, $htype, $comp, $hloc, $hprice, $vehiclemodel,  $vehiclearea, $vehicleseat, $vehicledur, $vehiclefee, $vehicleid);
     return $stmt->execute();

    } 
    function updateH($roomtype,$roomf, $htype, $comp, $hloc, $hprice,$hotelname)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE HNTD SET roomtype = ?, roomf= ?, htype= ?, comp= ?, hloc= ?, hprice= ? WHERE hotelname = ?");
    $stmt->bind_param("sssssss",$roomtype,$roomf, $htype, $comp, $hloc, $hprice,$hotelname);
     return $stmt->execute();
    }
    function updateT($vehiclemodel,  $vehiclearea, $vehicleseat, $vehicledur, $vehiclefee, $vehicleid)
    {
    $conn = connect();
    $stmt = $conn->prepare("UPDATE HNTD SET vehiclemodel= ?, vehiclearea= ?, vehicleseat= ?, vehicledur= ? , vehiclefee= ? WHERE vehicleid = ?");
    $stmt->bind_param("sssssi",$vehiclemodel,  $vehiclearea, $vehicleseat, $vehicledur, $vehiclefee, $vehicleid);
     return $stmt->execute();
    }

?>