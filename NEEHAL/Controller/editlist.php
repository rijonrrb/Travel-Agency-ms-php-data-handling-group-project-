<?php include "../NEEHAL/Model/dbupdatetouristlist.php";?>

<!DOCTYPE html>
<html>
<head>
    
	<meta charset="utf-8">
	<title>Tourist list</title>
    <link rel="stylesheet" href="../NEEHAL/View/css/editlist.css"></link>
    <script src="../NEEHAL/View/js/editlist.js"></script>
</head>
<body>


<?php

 $touristname = $touristid = $touristmembers = $visitingtime = $duration  = $phone = " ";
 $touristnameErr = $touristidErr = $touristmembersErr = $visitingtimeErr = $durationErr  = $phoneErr = " ";
 $flag = false;
 $successfulMessage = $errorMessage =  " ";

if($_SERVER['REQUEST_METHOD'] == "POST")
{

if(empty($_POST["touristname"])) 
{
$touristnameErr = "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}
if(empty($_POST["touristid"])) 
{
$touristidErr = "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}
if(empty($_POST["touristmembers"])) 
{
$touristmembersErr = "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}
if(empty($_POST["touristname"])) 
{
$touristnameErr = "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}
if(empty($_POST["visitingtime"])) 
{
$visitingtimeErr = "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}
if(empty($_POST["duration"])) 
{
$durationErr = "&nbsp &nbsp &nbsp *Please do not keep field empty!";
$flag = true;
}
if(empty($_POST["phone"])) 
{
$phoneErr = "&nbsp &nbsp &nbsp *Please do not keep field empty!";
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

      $res = editTlist($touristname, $touristmembers, $visitingtime, $duration, $phone, $touristid);

        if($res) {
        $successfulMessage = "Sucessfully saved.";
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

 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "editTlist" onsubmit="return isValid()";>
<br>
	<p id="editlistpara"><b>EDIT TOURIST LIST</p>
    <br>

       <label for="touristid"></label><span style="color:maroon;">Enter the tourist ID you want to update:</span>
       <input type="text" id="touristid" name="touristid" pattern="[0-9]+">
       <span id="touristidErr" style="color:red;"></span>
       <span style="color: red"><?php echo $touristidErr; ?></span>
       <br><br>

	<fieldset id="editfs"><br>


       <label for="touristname"></label><span style="color:maroon;">Tourist name:</span>
       <input type="text" id="touristname" name="touristname">
       <span id="touristnameErr" style="color:red;"></span>
       <span style="color: red"><?php echo $touristnameErr; ?></span>
       <br><br>


       <label for="touristmembers"></label><span style="color:maroon;">Group/family members of the Tourist:</span>
       <input type="text" id="touristmembers" name="touristmembers">
       <span id="touristmembersErr" style="color:red;"></span>
       <span style="color: red"><?php echo $touristmembersErr; ?></span>
       <br><br>


       <label for="visitingtime"></label><span style="color:maroon;">Visiting Time:</span>
       <input type="text" id="visitingtime" name="visitingtime">
       <span id="visitingtimeErr" style="color:red;"></span>
       <span style="color: red"><?php echo $visitingtimeErr; ?></span>
       <br><br>


       <label for="duration"></label><span style="color:maroon;">Duration of the stay in the tour:</span>
       <input type="text" id="duration" name="duration">
       <span id="durationErr" style="color:red;"></span>
       <span style="color: red"><?php echo $durationErr; ?></span>
       <br><br>

       <label for="phone"></label><span style="color:maroon;">Phone number:</span>
       <input type="tel" id="phone" name="phone">
       <span id="phoneErr" style="color:red;"></span>
       <span style="color: red"><?php echo $phoneErr; ?></span>
       <br><br>
       <input type="submit" name="Submit" value="EDIT"> 


	</fieldset>
    <br><br>
       </form>
<br> 
    <span style="color: green"><?php echo $successfulMessage; ?></span>
   <span style="color: red"><?php echo $errorMessage; ?></span>
   
<br>
    <p align=right><a href="../NEEHAL/View/Tlist.php">Back</p>





</body>
</html>