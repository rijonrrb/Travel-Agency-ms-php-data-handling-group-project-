<!DOCTYPE html>
<html>
<head>
    <style>
    </style>
<meta charset="utf-8">
<title>Conversion</title>
<link rel="stylesheet" href="../View/css/view.css"></link>
</head>
<body id="viewbody">

<?php
$customeridErr =  "";  
$customerid = "";  
$flag = false;
include "../Model/dbConnect.php";
include "../Model/dbViewDel.php";
if(empty($_GET['Search']) or empty(input_data($_GET["customerid"])))
{
    $users = getAllUsers();
}
else
{
    $users = getUsers(input_data($_GET["customerid"]));
}
if(!empty($_GET["customerid"]))
{
    $del = delete($_GET["customerid"]);
    if($del)
    {
        $users = getAllUsers();
    }
    else
    {
        $users = getAllUsers();
    }
}

  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

    ?>



<h2 id="tourG">TOUR GUIDE DETAILS</h2>
<br>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET" >

<div id="customer">

    <label for="customerid">Enter Customer Id:</label>
    <input type="text" id="customerid" name="customerid">
    &nbsp;&nbsp;&nbsp;<input type="submit" name="Search" value="Search"><br>
    <span style="color: red"><?php echo $customeridErr; ?> </span> <br><br>
</div>

</form>
<fieldset id="viewfs">
    <?php

echo "<table>";
echo "<tr>";
echo "<th>CUSTOMER_ID</th>"; 
echo "<th>DAY 1</th>"; 
echo "<th>PLACE </th>";
echo "<th>STARTING_TIME</th>"; 
echo "<th>ENDING_TIME</th>"; 
echo "<th>DINE-OUT</th>";
echo "<th>CUISINE</th>"; 
echo "<th>DAY 2</th>"; 
echo "<th>PLACE</th>";
echo "<th>STARTING_TIME</th>"; 
echo "<th>ENDING_TIME</th>"; 
echo "<th>DINE-OUT</th>";
echo "<th>CUISINE</th>"; 
echo "<th>DAY 3</th>";
echo "<th>PLACE</th>";
echo "<th>STARTING_TIME</th>";
echo "<th>ENDING_TIME</th>";
echo "<th>DINE-OUT</th>";
echo "<th>CUISINE</th>";  
echo "<th>Action</th>";
echo "</tr>";
for($i = 0; $i < count($users); $i++)
{
    echo "<tr>";
    echo "<td>" . $users[$i]["customerid"] . "</td>";
    echo "<td>" . $users[$i]["day1"] . "</td>";
    echo "<td>" . $users[$i]["place1"] . "</td>";
    echo "<td>" . $users[$i]["start"] . "</td>";
    echo "<td>" . $users[$i]["end0"] . "</td>";
    echo "<td>" . $users[$i]["meal"] . "</td>";
    echo "<td>" . $users[$i]["cuisine"] . "</td>";
    echo "<td>" . $users[$i]["day2"] . "</td>";
    echo "<td>" . $users[$i]["place2"] . "</td>";
    echo "<td>" . $users[$i]["start1"] . "</td>";
    echo "<td>" . $users[$i]["end1"] . "</td>";
    echo "<td>" . $users[$i]["meal1"] . "</td>";
    echo "<td>" . $users[$i]["cuisine1"] . "</td>";
    echo "<td>" . $users[$i]["day3"] . "</td>";
    echo "<td>" . $users[$i]["place3"] . "</td>";
    echo "<td>" . $users[$i]["start2"] . "</td>";
    echo "<td>" . $users[$i]["end2"] . "</td>";
    echo "<td>" . $users[$i]["meal2"] . "</td>";
    echo "<td>" . $users[$i]["cuisine2"] . "</td>";
    echo "<td><a href='".$_SERVER['PHP_SELF'] . "?customerid=".$users[$i]["customerid"]."'>  Delete</a></td>";
    echo "<td></td>";
    echo "</tr>";
}

?>

</fieldset>
 
<p align="right"><a href="../View/Tschema.php">Go back</p></a><br>

</body>
</html>