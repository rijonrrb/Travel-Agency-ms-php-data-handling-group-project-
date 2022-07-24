<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<link rel="stylesheet" href="../View/css/visaA.css"></link>
</head>
<body>
<?php
include '../view/vheading.php';
?>
<?php
include '../Model/dbvisaD.php';
// define variables to empty values   
$visaid = $countryname = $visatype = $personaldocument = $professionaldocuments = $financialdocument = $overseasdocument  =$protime = $fess = $phone = "";  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
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

      

        $res = reg($visaid, $countryname, $visatype, $personaldocument, $professionaldocuments, $financialdocument, $overseasdocument, $protime,  $fess, $phone);
        if($res) {
        echo "<span style='color: green;'>Successfully added</span>";
        }
        else {
        echo "<span style='color: red;'>Error while saving</span>";
        }
    }
  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }
?> 
<h1>Visa details adding</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
  <fieldset>
    <legend>Basic Information of a Visa</legend>
    <label for="visaid">Enter VISA Id number:</label>
    <input type="text" id="visaid" name="visaid">
     <br><br>
    <label for="countryname">Enter Country name for VISA:</label>
    <input type="text" id="countryname" name="countryname">
     <br><br>   
    <label for="visatype">Enter VISA type:</label>
    <textarea name="visatype" id="visatype" rows="4" cols="30"></textarea>
    <br><br>
    </fieldset>

    <fieldset>
    <legend>Requirements for visa</legend>
    <label for="personaldocument">Personal Document:</label>
    <textarea name="personaldocument" id="personaldocument" rows="4" cols="40"></textarea>
     <br><br>

    <label for="professionaldocuments">Professional Document:</label>
    <textarea name="professionaldocuments" id="professionaldocuments" rows="4" cols="40"></textarea>
     <br><br>

    <label for="financialdocument">Financial Document:</label>
    <textarea name="financialdocument" id="financialdocument" rows="4" cols="40"></textarea>
     <br><br>

    <label for="overseasdocument">Overseas Document:</label>
    <textarea name="overseasdocument" id="overseasdocument" rows="4" cols="40"></textarea>
     </span> <br><br>
    </fieldset>

    <fieldset>
    <legend>Fees & Processing time for visa</legend>

    <label for="protime">Processing Time (Total Approx. Days):</label>
    <textarea name="protime" id="protime" rows="4" cols="40"></textarea>
     <br><br>

    <label for="fees">Visa fee Details (Tourist & Business):</label>
    <textarea name="fess" id="fess" rows="4" cols="40"></textarea>
     <br><br>

    <label for="phone">Contact number:</label>
    <input type="tel" id="phone" name="phone" >
     <br><br>

  </fieldset>
  <br><br><div style="text-align : center"><input type="submit" value="Submit" id="subb"></div>
</form>
 <br>
 
<div id="visa"></div>

</body>
</html>