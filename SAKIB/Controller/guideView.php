<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Travel Agency</title>
</head>
<body style="background-color: #E3E8E9;">
    <?php
include '../Model/dbguideD.php';
$guideidErr =  "";  
$guideid = "";  
$flag = false;

if(empty($_GET['Search']) or empty(input_data($_GET["guideid"])))
{
    $users = getAllUsers();
}
else
{
    $users = getUsers(input_data($_GET["guideid"]));
}
if(!empty($_GET["guideid"]))
{
    $del = delete($_GET["guideid"]);
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

<?php
include '../view/gheading.php';
?>
<h1>Tour Guide Details</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET" >
    <label for="guideid">Enter Customer Id to view hes/her details:</label>
    <input type="text" id="guideid" name="guideid">
    &nbsp;&nbsp;&nbsp;<input type="submit" value="Submit"><br>
    <span style="color: red"><?php echo $guideidErr; ?> </span> <br><br>
</form>
<fieldset style="background-color: #FBE5C8">
 <?php
echo "<table>";
echo "<tr>";
echo "<th>Guide_Id</th>"; 
echo "<th>Fullname</th>"; 
echo "<th>Gender</th>";
echo "<th>Date_Of_Birth</th>"; 
echo "<th>Religion</th>"; 
echo "<th>Present_Address</th>";
echo "<th>Permanent_Address</th>"; 
echo "<th>Phone</th>"; 
echo "<th>Email</th>";
echo "<th>Country</th>"; 
echo "<th>Region</th>";
echo "<th>Type</th>"; 
echo "<th>Time</th>";
echo "<th>Action</th>";  
echo "</tr>";
for($i = 0; $i < count($users); $i++)
{
    echo "<tr>";
    echo "<td>" . $users[$i]["guideid"] . "</td>";
    echo "<td>" . $users[$i]["fullname"] . "</td>";
    echo "<td>" . $users[$i]["gender"] . "</td>";
    echo "<td>" . $users[$i]["dob"] . "</td>";
    echo "<td>" . $users[$i]["religion"] . "</td>";
    echo "<td>" . $users[$i]["Praddress"] . "</td>";
    echo "<td>" . $users[$i]["Peaddress"] . "</td>";
    echo "<td>" . $users[$i]["email"] . "</td>";
    echo "<td>" . $users[$i]["phone"] . "</td>";
    echo "<td>" . $users[$i]["country"] . "</td>";
    echo "<td>" . $users[$i]["region"] . "</td>";
    echo "<td>" . $users[$i]["type"] . "</td>";
    echo "<td>" . $users[$i]["timee"] . "</td>";
    echo "<td><a href='".$_SERVER['PHP_SELF'] . "?guideid=".$users[$i]["guideid"]."'>  Delete</a></td>";
    echo "<td></td>";
    echo "</tr>";
}
?>
</fieldset>
</body>
</html>