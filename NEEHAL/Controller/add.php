<?php

include "../NEEHAL/Model/dbSchemaAdd.php";

?>

<!DOCTYPE html>
<html>
<head>
    
	<meta charset="utf-8">
	<title>Add</title>
    <link rel="stylesheet" href="../NEEHAL/View/css/add.css"></link>
    <script src="../NEEHAL/View/js/add.js"></script>
</head>
<body id="addschema">

<?php

 $customerid = $day1 = $place1 = $start = $end = $meal  = $cuisine = $day2 = $place2 = $start1 = $end1 = $meal1  = $cuisine1 = $day3 = $place3 = $start2 = $end2 = $meal2 = $cuisine2 = " ";
$customeridErr = $dayErr1 = $place1Err = $startErr = $endErr = $mealErr =$cuisineErr = $dayErr12 = $place2Err =  $start1Err = $end1Err = $meal1Err = $cuisine1Err = $dayErr3 = $place3Err = $start2Err = $end2Err = $meal2Err = $cuisine2Err = " ";
$flag = false;
$successfulMessage = $errorMessage = "";

if($_SERVER['REQUEST_METHOD'] == "POST") 
{

if(empty($_POST["customerid"])) 
{
$customeridErr = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["place1"])) 
{
$place1Err = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["start"])) 
{
$startErr = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["end"])) 
{
$endErr = "*Please fill in field";
$flag = true;
}
if(empty($_POST["meal"])) 
{
$mealErr = "*Please fill in field";
$flag = true;
}
if(empty($_POST["cuisine"])) 
{
$cuisineErr = "*Please fill in field";
$flag = true;
}

if(empty($_POST["place2"])) 
{
$place2Err = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["start1"])) 
{
$start1Err = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["end1"])) 
{
$end1Err = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["meal1"])) 
{
$meal1Err = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["cuisine1"])) 
{
$cuisine1Err = "*Please fill in field ";
$flag = true;
}

if(empty($_POST["place3"])) 
{
$place3Err = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["start2"])) 
{
$start2Err = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["end2"])) 
{
$end2Err = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["meal2"])) 
{
$meal2Err = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["cuisine2"])) 
{
$cuisine2Err = "*Please fill in field ";
$flag = true;
}


if(!$flag) 
    {
      $customerid=input($_POST['customerid']);
      $day1=input($_POST['day1']);
      $place1 = input($_POST["place1"]);
      $start = input($_POST["start"]);
      $end = input($_POST["end"]);
      $meal = input($_POST["meal"]);
      $cuisine = input($_POST["cuisine"]);

      $day2=input($_POST['day2']);
      $place2 = input($_POST["place2"]);
      $start1 = input($_POST["start1"]);
      $end1 = input($_POST["end1"]);
      $meal1 = input($_POST["meal1"]);
      $cuisine1 = input($_POST["cuisine1"]);

      $day3=input($_POST['day3']);
      $place3 = input($_POST["place3"]);
      $start2 = input($_POST["start2"]);
      $end2 = input($_POST["end2"]);
      $meal2 = input($_POST["meal2"]);
      $cuisine2 = input($_POST["cuisine2"]);

     
      $res = add( $customerid, $day1, $place1, $start, $end, $meal, $cuisine, $day2, $place2,  $start1, $end1, $meal1, $cuisine1, $day3,$place3,$start2,$end2,$meal2,$cuisine2);
        if($res) {
        $successfulMessage = "Sucessfully saved!";
        }
        else {
        $errorMessage = "Error while saving.";
        }
        
     
    }
}
 function input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "adding" onsubmit="return isValid()";>

	

    <p id="para"><b>ADD SCHEMA</p>
    <br>
    <label for="customerid">Enter Customer Id:</label>
    <input type="text" id="customerid" name="customerid">
    <span id="customeridErr" style="color:red;"></span>
    <span style="color: red"><?php echo $customeridErr; ?> </span> <br><br>

		<fieldset id="fs">
            <legend id="lgnd">
                <b> SPOT 1: </b>
            </legend>
     
     
     <label for="day1"></label><span style="color:darkolivegreen">Day 1:</span>
     <select id="day1" name="day1">
         <option value="sunday">Sunday</option>
         <option value="monday">Monday</option>
         <option value="tuesday">Tuesday</option>
     </select>
     <br><br>

     <label for="place1"></label><span style="color:darkolivegreen;">Spot 1:</span>
     <input type="text"id="place1" name="place1">
     <span id="place1Err" style="color:red;"></span>
     <span style="color: red"><?php echo $place1Err; ?></span>
     <br><br>

     <label for="start"></label><span style="color:darkolivegreen;">Outset Time:</span>
     <input type="text" id="start" name="start">
     <span id="startErr" style="color:red;"></span>
     <span style="color: red"><?php echo $startErr; ?></span>
     <br><br>

     <label for="end"></label><span style="color:darkolivegreen;">Pack-Up Time:</span>
     <input type="text" id="end" name="end">
     <span id="endErr" style="color:red;"></span>
     <span style="color: red"><?php echo $endErr; ?></span>
     <br><br>

     <label for="meal"></label><span style="color:darkolivegreen;">Dine-out:</span>
     <input type="text" id="meal" name="meal">
     <span id="mealErr" style="color:red;"></span>
     <span style="color: red"><?php echo $mealErr; ?></span>
     <br><br>

     <label for="cuisine"></label><span style="color:darkolivegreen;">Cuisine:</span>
     <input type="text" id="cuisine" name="cuisine">
     <span id="cuisineErr" style="color:red;"></span>
     <span style="color: red"><?php echo $cuisineErr; ?></span>
     <br><br>
     </fieldset>
     <br>

     <fieldset id="fs">
     <legend id="lgnd">
         <b>SPOT 2: </b>
     </legend>
     
     <label for="day2"></label><span style="color:darkolivegreen">Day 2:</span>
     <select id="day2" name="day2">
         <option value="thursday">Thursday</option>
         <option value="friday">Friday</option>
         <option value="saturday">Saturday</option>
     </select>
     <br><br>

      <label for="place2"></label><span style="color:darkolivegreen;">Spot 2:</span>
     <input type="text"id="place2" name="place2">
     <span id="place2Err" style="color:red;"></span>
     <span style="color: red"><?php echo $place2Err; ?></span>
     <br><br>

     <label for="start1"></label><span style="color:darkolivegreen;">Outset Time:</span>
     <input type="text" id="start1" name="start1">
     <span id="start1Err" style="color:red;"></span>
     <span style="color: red"><?php echo $start1Err; ?></span>
     <br><br>

     <label for="end1"></label><span style="color:darkolivegreen;">Pack-Up Time:</span>
     <input type="text" id="end1" name="end1">
     <span id="end1Err" style="color:red;"></span>
     <span style="color: red"><?php echo $end1Err; ?></span>
     <br><br>

     <label for="meal1"></label><span style="color:darkolivegreen;">Dine-out:</span>
     <input type="text" id="meal1" name="meal1">
     <span id="meal1Err" style="color:red;"></span>
     <span style="color: red"><?php echo $meal1Err; ?></span>
     <br><br>

     <label for="cuisine1"></label><span style="color:darkolivegreen;">Cuisine:</span>
     <input type="text" id="cuisine1" name="cuisine1">
     <span id="cuisine1Err" style="color:red;"></span>
     <span style="color: red"><?php echo $cuisine1Err; ?></span>
     <br><br>
     </fieldset>
     <br>

     <fieldset id="fs">
         <legend id="lgnd">
             <b>SPOT 3:</b>
         </legend>
    
     <label for="day3"></label><span style="color:darkolivegreen">Day 3:</span>
     <select id="day3" name="day3">
         <option value="sunday">Sunday</option>
         <option value="monday">Monday</option>
         <option value="wednesday">Wednesday</option> 
     </select>
     <br><br>

    <label for="place3"></label><span style="color:darkolivegreen;">Spot 3:</span>
     <input type="text"id="place3" name="place3">
     <span id="place3Err" style="color:red;"></span>
     <span style="color: red"><?php echo $place3Err; ?></span>
     <br><br>

     <label for="start2"></label><span style="color:darkolivegreen;">Outset Time:</span>
     <input type="text" id="start2" name="start2">
     <span id="start2Err" style="color:red;"></span>
     <span style="color: red"><?php echo $start2Err; ?></span>
     <br><br>

     <label for="end2"></label><span style="color:darkolivegreen;">Pack-Up Time:</span>
     <input type="text" id="end2" name="end2">
     <span id="end2Err" style="color:red;"></span>
     <span style="color: red"><?php echo $end2Err; ?></span>
     <br><br>

     <label for="meal2"></label><span style="color:darkolivegreen;">Dine-out:</span>
     <input type="text" id="meal2" name="meal2">
     <span id="meal2Err" style="color:red;"></span>
     <span style="color: red"><?php echo $meal2Err; ?></span>
     <br><br>

     <label for="cuisine2"></label><span style="color:darkolivegreen;">Cuisine:</span>
     <input type="text" id="cuisine2" name="cuisine2"> 
     <span id="cuisine2Err" style="color:red;"></span>
     <span style="color: red"><?php echo $cuisine2Err; ?></span>

	</fieldset>
	<br>

	<input type="submit" name="Submit" value="SUBMIT">	
	<br>
        
    <span style="color: green"><?php echo $successfulMessage; ?></span>
   <span style="color: red"><?php echo $errorMessage; ?></span>
<br>
<p align=right><a href="../NEEHAL/View/Tschema.php">Back</ap>

     

</body>
</html>