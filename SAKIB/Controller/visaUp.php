<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<link rel="stylesheet" href="../View/css/visaU.css"></link>
</head>
<body>

    <?php
include '../Model/dbvisaD.php';
// define variables to empty values  
$visaidErr = $countrynameErr = $visatypeErr = $personaldocumentErr = $professionaldocumentsErr = $financialdocumentErr = $overseasdocumentErr  =$protimeErr = $fessErr = $phoneErr = "";  
$visaid = $countryname = $visatype = $personaldocument = $professionaldocuments = $financialdocument = $overseasdocument  =$protime = $fess = $phone = "";  
$edit = "";
$flag = false;
$successfulMessage = $errorMessage = "";
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["visaid"])) 
    {  
       $visaidErr = " Visa Id is required";
       $flag = True;  
    } 
    if (empty($_POST["countryname"])) 
    {  
        $countrynameErr = " Country Name is required";
        $flag = True;  
    } 
    if (empty($_POST["visatype"])) 
    {  
        $visatypeErr = " Visa Type is required";
        $flag = True;  
    }      

    if (empty($_POST["personaldocument"])) 
    {  
        $personaldocumentErr = " Personal Document is required";
        $flag = True;  
    }  

    if (empty($_POST["professionaldocuments"])) 
    {  
        $professionaldocumentsErr = " Professional Document is required";
        $flag = True;  
    } 
    if (empty($_POST["financialdocument"])) 
    {  
        $financialdocumentErr = " Financial Document is required";
        $flag = True;  
    } 
        if (empty($_POST["overseasdocument"])) 
    {  
        $overseasdocumentErr = " Overseas Document is required";
        $flag = True;  
    } 
        if (empty($_POST["protime"])) 
    {  
        $protimeErr = " Processing time is required";
        $flag = True;  
    } 

    if (empty($_POST["fess"])) 
    {  
       $fessErr = " fess is required";
       $flag = True;  
    } 

    if (empty($_POST["phone"])) 
    {  
       $phoneErr = " Phone number is required";
       $flag = True;  
    } 

    
    if(!$flag) 
    {
      $visaid = input_data($_POST["visaid"]);
      $countryname = input_data($_POST["countryname"]);
      $visatype = input_data($_POST["visatype"]);
      $personaldocument = input_data($_POST["personaldocument"]);
      $professionaldocuments = input_data($_POST["professionaldocuments"]);
      $financialdocument = input_data($_POST["financialdocument"]);
      $overseasdocument = input_data($_POST["overseasdocument"]);
      $protime = input_data($_POST["protime"]);
      $fess = input_data($_POST["fess"]);
      $phone = input_data($_POST["phone"]);

      

        $res = update($countryname, $visatype, $personaldocument, $professionaldocuments, $financialdocument, $overseasdocument, $protime,  $fess, $phone,$visaid);
        if($res) {
        $successfulMessage = "Successfully done....";
        }
        else {
        $errorMessage = "Error while saving.";
        }
  
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
include '../view/vheading.php';
?>
<h1>Visa details Updating</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
  <fieldset>
    <legend>Basic Information of a Visa</legend>
    <label for="visaid">Which VISA details you want to change ?(Enter Id) :</label>
    <input type="text" id="visaid" name="visaid">
    <span style="color: red"><?php echo $visaidErr; ?> </span> <br><br>
    <label for="countryname">Enter Country name for VISA:</label>
    <input type="text" id="countryname" name="countryname">
    <span style="color: red"><?php echo $countrynameErr; ?> </span> <br><br>   
    <label for="visatype">Enter VISA type:</label>
    <textarea name="visatype" rows="4" cols="30"></textarea>
    <span style="color: red"><?php echo $visatypeErr; ?> </span> <br><br>
    </fieldset>

    <fieldset>
    <legend>Requirements for visa</legend>
    <label for="personaldocument">Personal Document:</label>
    <textarea name="personaldocument" rows="4" cols="40"></textarea>
    <span style="color: red"><?php echo $personaldocumentErr; ?> </span> <br><br>

    <label for="professionaldocuments">Professional Document:</label>
    <textarea name="professionaldocuments" rows="4" cols="40"></textarea>
    <span style="color: red"><?php echo $professionaldocumentsErr; ?> </span> <br><br>

    <label for="financialdocument">Financial Document:</label>
    <textarea name="financialdocument" rows="4" cols="40"></textarea>
    <span style="color: red"><?php echo $financialdocumentErr; ?> </span> <br><br>

    <label for="overseasdocument">Overseas Document:</label>
    <textarea name="overseasdocument" rows="4" cols="40"></textarea>
    <span style="color: red"><?php echo $overseasdocumentErr; ?> </span> <br><br>
    </fieldset>

    <fieldset>
    <legend>Fees & Processing time for visa</legend>

    <label for="protime">Processing Time (Total Approx. Days):</label>
    <textarea name="protime" rows="4" cols="40"></textarea>
    <span style="color: red"><?php echo $protimeErr; ?> </span> <br><br>

    <label for="fees">Visa fee Details (Tourist & Business):</label>
    <textarea name="fess" rows="4" cols="40"></textarea>
    <span style="color: red"><?php echo $fessErr; ?> </span> <br><br>

    <label for="phone">Contact number:</label>
    <input type="tel" id="phone" name="phone" >
    <span style="color: red"><?php echo $phoneErr; ?> </span> <br><br>

  </fieldset>
  <br><br><div style="text-align : center"><input type="submit" value="Submit" id="subb"></div>
</form>
 <br>
 <span style="color: green"><?php echo "<b>".$edit."</b>"; ?></span>
 <span style="color: green"><?php echo "<b>".$successfulMessage."</b>"; ?></span>
<span style="color: red"><?php echo "<b>".$errorMessage."</b>"; ?></span>

</body>
</html>