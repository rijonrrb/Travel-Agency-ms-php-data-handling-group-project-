<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <title>Update</title>
    <link rel="stylesheet" href="../View/css/update.css"></link>
    
</head>
<body id="updateschema">

 <?php
   
 include "../Model/dbSchemaUpdate.php";
 
if($_SERVER['REQUEST_METHOD'] == "POST") 
{


$customerid = $day1 = $place1 = $start = $end = $meal  = $cuisine = $day2 = $place2 = $start1 = $end1 = $meal1  = $cuisine1 = $day3 = $place3 = $start2 = $end2 = $meal2 = $cuisine2 = " ";

$customerid = input($_POST['customerid']);
      $day1 = input($_POST['day1']);
      $place1 = input($_POST["place1"]);
      $start = input($_POST["start"]);
      $end0 = input($_POST["end"]);
      $meal = input($_POST["meal"]);
      $cuisine = input($_POST["cuisine"]);

      $place2 = input($_POST["place2"]);
      $day2 = input($_POST['day2']);
      $start1 = input($_POST["start1"]);
      $end1 = input($_POST["end1"]);
      $meal1 = input($_POST["meal1"]);
      $cuisine1 = input($_POST["cuisine1"]);

      $place3 = input($_POST["place3"]);
      $day3 = input($_POST['day3']);
      $start2 = input($_POST["start2"]);
      $end2 = input($_POST["end2"]);
      $meal2 = input($_POST["meal2"]);
      $cuisine2 = input($_POST["cuisine2"]);


      $res = update($day1, $place1, $start, $end0, $meal, $cuisine, $day2, $place2,  $start1, $end1, $meal1, $cuisine1, $day3,$place3,$start2,$end2,$meal2,$cuisine2, $customerid);
        if($res){
            echo "Sucessfully saved!";
        }
        else {
        echo "Error while saving.";
        }

}
function input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <p id="paraUp">UPDATE SCHEMA</p>
    <br>
    <div id="updatecustomer">
    <label for="customerid">Enter customer ID you want to update :</label>
    <input type="text" id="customerid" name="customerid">
    
    <br><br>
    </div>

        <fieldset id="fsUp">
            <legend id="lgndUp">
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
     
     
     <br><br>

     <label for="start"></label><span style="color:darkolivegreen;">Outset Time:</span>
     <input type="text" id="start" name="start">
     
     
     <br><br>

     <label for="end"></label><span style="color:darkolivegreen;">Pack-Up Time:</span>
     <input type="text" id="end" name="end">
     
     
     <br><br>

     <label for="meal"></label><span style="color:darkolivegreen;">Dine-out:</span>
     <input type="text" id="meal" name="meal">
     
     
     <br><br>

     <label for="cuisine"></label><span style="color:darkolivegreen;">Cuisine:</span>
     <input type="text" id="cuisine" name="cuisine">
     
     
     <br><br>
     </fieldset><br>

     <fieldset id="fsUp">
     <legend>
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
     
     
     <br><br>

     <label for="start1"></label><span style="color:darkolivegreen;">Outset Time:</span>
     <input type="text" id="start1" name="start1">
     
     
     <br><br>

     <label for="end1"></label><span style="color:darkolivegreen;">Pack-Up Time:</span>
     <input type="text" id="end1" name="end1">
     
    
     <br><br>

     <label for="meal1"></label><span style="color:darkolivegreen;">Dine-out:</span>
     <input type="text" id="meal1" name="meal1">
     
    
     <br><br>

     <label for="cuisine1"></label><span style="color:darkolivegreen;">Cuisine:</span>
     <input type="text" id="cuisine1" name="cuisine1">
     
     
     <br><br>
     </fieldset><br>

     <fieldset id="fsUp">
         <legend>
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
     
    
     <br><br>

     <label for="start2"></label><span style="color:darkolivegreen;">Outset Time:</span>
     <input type="text" id="start2" name="start2">
     
     
     <br><br>

     <label for="end2"></label><span style="color:darkolivegreen;">Pack-Up Time:</span>
     <input type="text" id="end2" name="end2">
     
     
     <br><br>

     <label for="meal2"></label><span style="color:darkolivegreen;">Dine-out:</span>
     <input type="text" id="meal2" name="meal2">
     

     <br><br>

     <label for="cuisine2"></label><span style="color:darkolivegreen;">Cuisine:</span>
     <input type="text" id="cuisine2" name="cuisine2"> 
     


    </fieldset>
    <br>

    <input type="submit" name="Submit"> 
    <br>
        
<div id="updateajax"></div>
<br>
<p align=right><a href="../View/Tschema.php">Back</ap>



</body>
</html>