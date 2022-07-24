
<?php

include "../NEEHAL/Model/dbcreatetouristlist.php";

 $touristname = $touristid = $touristmembers = $visitingtime = $duration  = $phone = " ";
 $flag = false;

if($_SERVER['REQUEST_METHOD'] == "POST")
{

if(empty($_POST["touristname"])) 
{
echo "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}
if(empty($_POST["touristid"])) 
{
echo "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}
if(empty($_POST["touristmembers"])) 
{
echo "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}
if(empty($_POST["touristname"])) 
{
echo "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}
if(empty($_POST["visitingtime"])) 
{
echo "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}
if(empty($_POST["duration"])) 
{
echo "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}
if(empty($_POST["phone"])) 
{
echo "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}

if(!$flag) 
    {
      $touristname = input($_POST["touristname"]);
      $touristid = input($_POST["touristid"]);
      $touristmembers = input($_POST["touristmembers"]);
      $visitingtime = input($_POST["visitingtime"]);
      $duration = input($_POST["duration"]);
      $phone = input($_POST["phone"]);

      $res = createTList($touristname, $touristid, $touristmembers, $visitingtime, $duration, $phone);
      
        if($res) {
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