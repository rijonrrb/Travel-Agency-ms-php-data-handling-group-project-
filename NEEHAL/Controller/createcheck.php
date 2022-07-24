<?php 

include "../NEEHAL/Model/dbChecklistInsert.php";

?>


<!DOCTYPE html>
<html>
<head>
   
	<meta charset="utf-8">
	<title>Create check list</title>
    <link rel="stylesheet" href="../NEEHAL/View/css/createcheck.css"></link>
    <script src="../NEEHAL/View/js/createcheck.js"></script>
</head>
<body>


    
 <?php

 $customerid = $scheduledplace = $scheduledtime = $recommendedtrans = $customernumber = $recommendedcuisine = $spot1 = $spot2 = $spot3 = " ";
$customeridErr = $scheduledplaceErr = $scheduledtimeErr = $recommendedtransErr = $customernumberErr = $recommendedcuisineErr = $spot1Err = $spot2Err = $spot3Err = " ";
$flag = false;
$successfulMessage = $errorMessage = "";

if($_SERVER['REQUEST_METHOD'] == "POST") 
{

if(empty($_POST["customerid"])) 
{
$customeridErr = " &nbsp &nbsp &nbsp *Please fill the field ";
$flag = true;
}
if(empty($_POST["scheduledplace"])) 
{
$scheduledplaceErr = "&nbsp &nbsp &nbsp *Please fill the field ";
$flag = true;
}
if(empty($_POST["scheduledtime"])) 
{
$scheduledtimeErr = "&nbsp &nbsp &nbsp *Please fill the field ";
$flag = true;
}
if(empty($_POST["recommendedtrans"])) 
{
$recommendedtransErr = "&nbsp &nbsp &nbsp *Please fill the field ";
$flag = true;
}
if(empty($_POST["customernumber"])) 
{
$customernumberErr = "&nbsp &nbsp &nbsp *Please fill the field ";
$flag = true;
}
if(empty($_POST["recommendedcuisine"])) 
{
$recommendedcuisineErr = "&nbsp &nbsp &nbsp *Please fill the field ";
$flag = true;
}
if(empty($_POST["spot1"])) 
{
$spot1Err = "&nbsp &nbsp &nbsp *Please fill the field ";
$flag = true;
}
if(empty($_POST["spot2"])) 
{
$spot2Err = "&nbsp &nbsp &nbsp *Please fill the field ";
$flag = true;
}
if(empty($_POST["spot3"])) 
{
$spot3Err = "&nbsp &nbsp &nbsp *Please fill the field ";
$flag = true;
}

if(!$flag)
{
	$customerid = input($_POST["customerid"]);
	$scheduledplace = input($_POST["scheduledplace"]);
	$scheduledtime = input($_POST["scheduledtime"]);
	$recommendedtrans = input($_POST["recommendedtrans"]);
	$customernumber = input($_POST["customernumber"]);
	$recommendedcuisine = input($_POST["recommendedcuisine"]);
	$spot1 = input($_POST["spot1"]);
	$spot2 = input($_POST["spot2"]);
	$spot3 = input($_POST["spot3"]);

	$res = addchecklist($customerid , $scheduledplace , $scheduledtime , $recommendedtrans , $customernumber , $recommendedcuisine , $spot1 , $spot2 , $spot3);
     if($res) {
        echo 'Succesful';
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
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "createchecklist" onsubmit="return isValid()";>
<br><br>
     <p id="checklist"><b>CREATE CHECKLISTS</p>
     <br><br>
        <label for="customerid"></label><span style="color: darkgoldenrod;">Customer ID:</span>
        <input type="text" id="customerid" name="customerid" pattern="[0-9]+">
        <span id="customeridErr" style="color:red;"></span>
        <span style="color: red"><?php echo $customeridErr; ?></span>
        <br><br>

	<fieldset id="checkfs">
		
		<label for="scheduledplace"></label><span style="color:darkgoldenrod;">Scheduled Spot Visit:</span>
        <input type="radio"  id= "yes" name="scheduledplace" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="scheduledplace" value="no">
        <label for="no">No</label>
        <span id="scheduledplaceErr" style="color:red;"></span>
        <span style="color: red"><?php echo $scheduledplaceErr; ?></span>
        <br></br>

        <label for="scheduledtime"></label><span style="color:darkgoldenrod;">Scheduled Time:</span>
        <input type="radio"  id= "yes" name="scheduledtime" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="scheduledtime" value="no">
        <label for="no">No</label>
        <span id="scheduledtimeErr" style="color:red;"></span>
        <span style="color: red"><?php echo $scheduledtimeErr; ?></span>
        <br></br>

        <label for="recommendedtrans"></label><span style="color:darkgoldenrod;">Recommended use of Transport:</span>
        <input type="radio"  id= "yes" name="recommendedtrans" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="recommendedtrans" value="no">
        <label for="no">No</label>
        <span id="recommendedtransErr" style="color:red;"></span>
        <span style="color: red"><?php echo $recommendedtransErr; ?></span>
        <br></br>

        <label for="customernumber"></label><span style="color:darkgoldenrod;">Presence of tourists according to list :</span>
        <input type="radio"  id= "yes" name="customernumber" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="customernumber" value="no">
        <label for="no">No</label>
        <span id="customernumberErr" style="color:red;"></span>
        <span style="color: red"><?php echo $customernumberErr; ?></span>
        <br></br>

        <label for="recommendedcuisine"></label><span style="color:darkgoldenrod;">Recommended Dine:</span>
        <input type="radio"  id= "yes" name="recommendedcuisine" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="recommendedcuisine" value="no">
        <label for="no">No</label>
        <span id="recommendedcuisineErr" style="color:red;"></span>
        <span style="color: red"><?php echo $recommendedcuisineErr; ?></span>
        <br></br>

        <label for="spot1"></label><span style="color:darkgoldenrod;">Visit to Spot 1:</span>
        <input type="radio"  id= "yes" name="spot1" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="spot1" value="no">
        <label for="no">No</label>
        <span id="spot1Err" style="color:red;"></span>
        <span style="color: red"><?php echo $spot1Err; ?></span>
        <br></br>
        
        <label for="spot2"></label><span style="color:darkgoldenrod;">Visit to Spot 2:</span>
        <input type="radio"  id= "yes" name="spot2" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" id="no" name="spot2" value="no">
        <label for="no">No</label>
        <span id="spot2Err" style="color:red;"></span>
        <span style="color: red"><?php echo $spot2Err; ?></span>
        <br></br>
        
        <label for="spot3"></label><span style="color:darkgoldenrod;">Visit to Spot 3:</span>
        <input type="radio"  id= "yes" name="spot3" value="yes">
        <label for="yes">Yes</label> 
        <input type="radio" id="no" name="spot3" value="no">
        <label for="no">No</label>
        <span id="spot3Err" style="color:red;"></span>
        <span style="color: red"><?php echo $spot3Err; ?></span>
        <br></br>
        

	</fieldset>

<br><br>
    <input type="submit" name="Submit">
    <br>
</form>
<br>
    <span style="color: green"><?php echo $successfulMessage; ?></span>
    <span style="color: red"><?php echo $errorMessage; ?></span>

    <p align="right"><a href="../NEEHAL/View/checklist.php">Back</ap>



</body>
</html>