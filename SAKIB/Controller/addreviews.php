<?php 

  include "../Model/dbInsertReviews.php";

?>

<!DOCTYPE html>
<html>
<head>
 
	<meta charset="utf-8">
	<title>Review</title>
  <link rel="stylesheet" href="../View/css/addreviews.css"></link>
  
</head>

<body>

<?php

$customerid = $coop = $coop2 = $behave = $behave2 = $rate = $rate2 = $feedback = " ";
$customeridErr = $coopErr = $coop2Err = $behaveErr = $behave2Err = $rateErr = $rate2Err = $feedbackErr = " ";
$flag = false;
$successfulMessage = $errorMessage = "";

if($_SERVER['REQUEST_METHOD'] == "POST") 
{

if(empty($_POST["customerid"])) 
{
$customeridErr = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["coop"])) 
{
$coopErr = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["coop2"])) 
{
$coop2Err = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["behave"])) 
{
$behaveErr = "*Please fill in field";
$flag = true;
}
if(empty($_POST["behave2"])) 
{
$behave2Err = "*Please fill in field";
$flag = true;
}
if(empty($_POST["rate"])) 
{
$rateErr = "*Please fill in field ";
$flag = true;
}
if(empty($_POST["rate2"])) 
{
$rate2Err = "*Please fill in field";
$flag = true;
}
if(empty($_POST["feedback"])) 
{
$feedbackErr = "*Please fill in field ";
$flag = true;
}


if(!$flag) 
    {
      $customerid=input($_POST['customerid']);
      $coop=input($_POST['coop']);
      $coop2 = input($_POST["coop2"]);
      $behave = input($_POST["behave"]);
      $behave2 = input($_POST["behave2"]);
      $rate = input($_POST["rate"]);
      $rate2 = input($_POST["rate2"]);
      $feedback = input($_POST["feedback"]);

       $res = addreviews( $customerid, $coop, $coop2, $behave, $behave2, $rate, $rate2, $feedback);
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


  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <br><rb></rb>
	<h2 id="h2feedback"><b>FEEDBACK:</h2>
	<br>
   <label for="customerid">Enter Customer Id:</label>
   <input type="text" id="customerid" name="customerid">
  <span style="color: red"><?php echo $customeridErr; ?> </span> <br><br>

   <fieldset id="feedfs">
   <legend id="lgnd"><b>CUSTOMER CO-OPERATIVENESS:</b></legend>
   
   <label for="coop">1.Was the customer co-operative? </label>
   <span style="color: red"><?php echo $coopErr; ?></span>
   <br><br>
   <input type="radio" name="coop" value="yes">
   <label for="yes">Yes</label>
   <br>
   <input type="radio" name="coop" value="no">
   <label for="no">No</label>
   <br><br>
   
   <label for="coop2">2.How well do you think he/she was being co-operative ? </label>
   <span style="color: red"><?php echo $coop2Err; ?></span>
   <br><br>
   <input type="radio" name="coop2" value="excellent">
   <label for="excellent">Excellent</label>
   <br>
   <input type="radio" name="coop2" value="verygood">
   <label for="verygood">Very Good</label>
   <br>
   <input type="radio" name="coop2" value="good">
   <label for="good">Good</label>
   <br>
   <input type="radio" name="coop2" value="average">
   <label for="average">Average</label>
   <br>
   <input type="radio" name="coop2" value="bad">
   <label for="bad">Bad</label>
   <br>
 
	</fieldset>
	<br><br>


   <fieldset id="feedfs">
   <legend id="lgnd"><b>CUSTOMER BEHAVIOR:</legend>
   <label for="behave">1.Was the customer well behaved?</label>
   <span style="color: red"><?php echo $behaveErr; ?></span>
   <br><br>
   <input type="radio" name="behave" value="yes">
   <label for="yes">Yes</label>
   <br>
   <input type="radio" name="behave" value="no">
   <label for="no">No</label>
   <br><br>
   
   <label for="behave">2.How much will you rate his/her behavior? </label>
   <span style="color: red"><?php echo $behave2Err; ?></span>
   <br><br>
   <input type="radio" name="behave2" value="excellent">
   <label for="excellent">Excellent</label>
   <br>
   <input type="radio" name="behave2" value="verygood">
   <label for="verygood">Very Good</label>
   <br>
   <input type="radio" name="behave2" value="good">
   <label for="good">Good</label>
   <br>
   <input type="radio" name="behave2" value="average">
   <label for="average">Average</label>
   <br>
   <input type="radio" name="behave2" value="bad">
   <label for="bad">Bad</label>
   <br>
	</fieldset>
	<br><br>

	<fieldset id="feedfs">
   <legend id="lgnd">OVERALL RATING:</legend>
   <label for="rate">1.On a scale of 1-5, what is your overall rating?</label>
   <span style="color: red"><?php echo $rateErr; ?></span>
   <br><br>
   <input type="radio" name="rate" value="1"><input type="radio" name="rate" value="2"><input type="radio" name="rate" value="3"><input type="radio" name="rate" value="4"><input type="radio" name="rate" value="5">
   <br>
   <label for="1">&nbsp;1&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;5</label>
   <br><br>
   
  
   
   <label for="coop">2.How much will you rate his/her behavior? </label>
   <span style="color: red"><?php echo $rate2Err; ?></span>
   <br><br>
   <input type="radio" name="rate2" value="excellent">
   <label for="excellent">Excellent</label>
   <br>
   <input type="radio" name="rate2" value="verygood">
   <label for="verygood">Very Good</label>
   <br>
   <input type="radio" name="rate2" value="good">
   <label for="good">Good</label>
   <br>
   <input type="radio" name="rate2" value="average">
   <label for="average">Average</label>
   <br>
   <input type="radio" name="rate2" value="bad">
   <label for="bad">Bad</label>
   <br>
	</fieldset>
	<br><br>

  <fieldset id="feedfs">
    <legend id="lgnd">PERSONAL FEEDBACK:</legend>
    <label for="feedback">Please share your personal feedback.(if any)</label>
    <span style="color: red"><?php echo $feedbackErr; ?></span>
    <br><br>
    <textarea id="feedback" name="feedback"></textarea>
  </fieldset>
    <br><br>

    <input type="submit" name="Submit">
    <br>
    </form>
     <span style="color: green"><?php echo $successfulMessage; ?></span>
    <span style="color: red"><?php echo $errorMessage; ?></span>
    <p align="right"><a href="../View/reviews.php">Back</ap>


</body>
</html>