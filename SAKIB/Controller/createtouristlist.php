
<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
	<title>Tourist list</title>
    <link rel="stylesheet" href="../View/css/createtouristlist.css"></link>
</head>
<body>

 <?php
   
 
      include "../Model/dbcreatetouristlist.php";  
if($_SERVER['REQUEST_METHOD'] == "POST") 
{
      $touristname ="";
      $touristid ="";
      $touristmembers ="";
      $visitingtime ="";
      $duration ="";
      $phone =  "";
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
function input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>


 

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<br>
	<p id="list"><b>CREATE TOURIST LIST</p>

	<fieldset id="fsl">
		
       <label for="touristname"></label><span style="color:maroon;">Tourist name:</span>
       <input type="text" id="touristname" name="touristname">
       
      
       <br><br>


       <label for="touristid"></label><span style="color:maroon;">Tourist ID:</span>
       <input type="text" id="touristid" name="touristid" pattern="[0-9]+">
       
       
       <br><br>


       <label for="touristmembers"></label><span style="color:maroon;">Group/family members of the Tourist:</span>
       <input type="text" id="touristmembers" name="touristmembers">
       
      
       <br><br>


       <label for="visitingtime"></label><span style="color:maroon;">Visiting Time:</span>
       <input type="text" id="visitingtime" name="visitingtime">
       
       
       <br><br>


       <label for="duration"></label><span style="color:maroon;">Duration of the stay in the tour:</span>
       <input type="text" id="duration" name="duration">
      
       
       <br><br>

       <label for="phone"></label><span style="color:maroon;">Phone number:</span>
       <input type="tel" id="phone" name="phone">
       
       
       <br><br><br>

       <input type="submit" name="Submit" value="ADD">
       <br>


	</fieldset></b>
    <br><br>

     
    <br>
    </form>
<br>    
<div id="createTLajax"></div>
<br>
    <p align=right><a href="../View/Tlist.php">Back</ap>





</body>
</html>