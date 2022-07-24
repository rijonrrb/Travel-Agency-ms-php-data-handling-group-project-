<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Travel Agency</title>
</head>
<body style="background-color: #E3E8E9;">
<?php
include '../Model/dbcusD.php';

if(empty($_GET['Search']) or empty(input_data($_GET["customerid"])))
{
    $users = getAllUsers();
}
else
{
    $users = getUsers(input_data($_GET["customerid"]));
}

  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

if(!empty($_GET["listID"]))
{
    $del = delete($_GET["listID"]);
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
<?php
include '../view/Cheading.php';
?>
<h1>Customer Details </h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET" >
    <label for="customerids">Enter Customer Id:</label>
    <input type="text" id="customerid" name="customerid">    
    &nbsp;&nbsp;&nbsp;<input type="submit" name="Search" value="Search">
    
    <br><br>
</form>
<fieldset style="background-color: #FBE5C8">
<?php


echo "<table>";
echo "<tr>";
echo "<th>Customer_Id</th>"; 
echo "<th>Fullname</th>"; 
echo "<th>Gender</th>";
echo "<th>Date_Of_Birth</th>"; 
echo "<th>Religion</th>"; 
echo "<th>Present_Address</th>";
echo "<th>Permanent_Address</th>"; 
echo "<th>Phone</th>"; 
echo "<th>Email</th>";
echo "<th>Package_Name</th>"; 
echo "<th>Package_time</th>"; 
echo "<th>Package_Id</th>";
echo "<th>Payment_Method</th>"; 
echo "<th>Payment_Status</th>";
echo "<th>Action</th>";  
echo "</tr>";
for($i = 0; $i < count($users); $i++)
{
    echo "<tr>";
    echo "<td>" . $users[$i]["customerid"] . "</td>";
    echo "<td>" . $users[$i]["fullname"] . "</td>";
    echo "<td>" . $users[$i]["gender"] . "</td>";
    echo "<td>" . $users[$i]["dob"] . "</td>";
    echo "<td>" . $users[$i]["religion"] . "</td>";
    echo "<td>" . $users[$i]["praddress"] . "</td>";
    echo "<td>" . $users[$i]["peaddress"] . "</td>";
    echo "<td>" . $users[$i]["email"] . "</td>";
    echo "<td>" . $users[$i]["phone"] . "</td>";
    echo "<td>" . $users[$i]["package"] . "</td>";
    echo "<td>" . $users[$i]["packageid"] . "</td>";
    echo "<td>" . $users[$i]["packagetime"] . "</td>";
    echo "<td>" . $users[$i]["paymentm"] . "</td>";
    echo "<td>" . $users[$i]["payments"] . "</td>";
    echo "<td><a href='"."customerView.php" . "?listID=".$users[$i]["listID"]."'>  Delete</a></td>";
    echo "<td></td>";
    echo "</tr>";
}
?>
</fieldset>
</body>
</html>