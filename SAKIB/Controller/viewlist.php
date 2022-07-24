<!DOCTYPE html>
<html>
<head>
   <style>
    </style>
    
<meta charset="utf-8">
<title>view list</title>
<link rel="stylesheet" href="../View/css/viewlist.css"></link>
</head>
<body>
<?php

include "../Model/dbConnect.php";
include "../Model/dbViewDtouristlist.php";


if(!empty($_GET["touristid"]))
{
    $del = delete($_GET["touristid"]);
    if($del)
    {
        $users = getAllUsers();
    }
    else
    {
        $users = getAllUsers();
    }
}

?>


<fieldset style="background-color: mistyrose;">

<p id="heading">VIEW TOURIST LIST</p></span>


<fieldset id="viewlistfs"> 
   <p id="viewlistpara"><u>DETAILS OF TOURISTS WHO HAVE ALREADY VISITED PLACES AND WHO ARE PRESENTLY VISITING:</u></p>

<?php
$users = getAllUsers();
echo "<table>";
echo "<tr>";
echo "<th>TOURIST_NAME</th>"; 
echo "<th>TOURIST_ID</th>"; 
echo "<th>NUMBER_OF_MEMBERS </th>";
echo "<th>VISITING_TIME</th>"; 
echo "<th>DURATION</th>"; 
echo "<th>PHONE</th>";
echo "<th>ACTION</th>";
echo "</tr>";
for($i = 0; $i < count($users); $i++)
{
    echo "<tr>";
    echo "<td>" . $users[$i]["touristname"] . "</td>";
    echo "<td>" . $users[$i]["touristid"] . "</td>";
    echo "<td>" . $users[$i]["touristmembers"] . "</td>";
    echo "<td>" . $users[$i]["visitingtime"] . "</td>";
    echo "<td>" . $users[$i]["duration"] . "</td>";
    echo "<td>" . $users[$i]["phone"] . "</td>";
    echo "<td><a href='"."viewlist.php". "?touristid=".$users[$i]["touristid"]."'>  Delete</a></td>";
    echo "<td></td>";
    echo "</tr>";
}
?>
</fieldset>
</fieldset>
<p style="color: blue; text-align: right;"><a href="../View/Tlist.php">Back</a></p>


</body>
</html>