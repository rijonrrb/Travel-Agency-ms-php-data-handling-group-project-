<?php
include "../NEEHAL/Model/dbConnect.php";
include "../NEEHAL/Model/dbViewDtouristlist.php";
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