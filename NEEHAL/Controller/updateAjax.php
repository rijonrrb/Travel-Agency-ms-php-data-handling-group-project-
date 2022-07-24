<?php

include "../NEEHAL/Model/dbSchemaUpdate.php";

$customerid = $day1 = $place1 = $start = $end = $meal  = $cuisine = $day2 = $place2 = $start1 = $end1 = $meal1  = $cuisine1 = $day3 = $place3 = $start2 = $end2 = $meal2 = $cuisine2 = " ";

$flag = false;


if($_SERVER['REQUEST_METHOD'] == "POST") 
{

if(empty($_POST["customerid"])) 
{
echo "*Please fill in field ";
$flag = true;
}

if(empty($_POST["place1"])) 
{
echo  "*Please fill in field ";
$flag = true;
}
if(empty($_POST["start"])) 
{
echo "*Please fill in field ";
$flag = true;
}
if(empty($_POST["end"])) 
{
echo "*Please fill in field";
$flag = true;
}
if(empty($_POST["meal"])) 
{
echo "*Please fill in field";
$flag = true;
}
if(empty($_POST["cuisine"])) 
{
echo "*Please fill in field";
$flag = true;
}

if(empty($_POST["place2"])) 
{
echo "*Please fill in field ";
$flag = true;
}
if(empty($_POST["start1"])) 
{
echo "*Please fill in field ";
$flag = true;
}
if(empty($_POST["end1"])) 
{
echo "*Please fill in field ";
$flag = true;
}
if(empty($_POST["meal1"])) 
{
echo "*Please fill in field ";
$flag = true;
}
if(empty($_POST["cuisine1"])) 
{
echo "*Please fill in field ";
$flag = true;
}

if(empty($_POST["place3"])) 
{
echo"*Please fill in field ";
$flag = true;
}
if(empty($_POST["start2"])) 
{
echo "*Please fill in field ";
$flag = true;
}
if(empty($_POST["end2"])) 
{
echo"*Please fill in field ";
$flag = true;
}
if(empty($_POST["meal2"])) 
{
echo "*Please fill in field ";
$flag = true;
}
if(empty($_POST["cuisine2"])) 
{
echo"*Please fill in field ";
$flag = true;
}


if(!$flag) 
    {
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

}
 function input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>