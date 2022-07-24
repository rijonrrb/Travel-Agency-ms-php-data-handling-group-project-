
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Visa Details:</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">

  <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="bootstrap.min.js"></script>
    <link rel="stylesheet" href="visadetails.css">
    <script type="text/javascript" src="visadetails.js"></script>

</head>
  <body >

<?php
   
   $Properties = $Properties2 = $Properties3 =" ";
   $PropertiesErr = $Properties2Err = $Properties3Err=" ";
   $flag = false;
   $successfulMessage = "";
   $errorMessage = "";
   define("filepath", "tpack.json");
   

if($_SERVER['REQUEST_METHOD'] == "POST") 
{

  if(empty($_POST["Properties"])) 
   {
      $PropertiesErr = "Please do not keep field empty";
      $flag = true;
   }
  if(empty($_POST["Properties2"])) 
   {
      $Properties2Err = "Please do not keep field empty";
      $flag = true;
   }
   if(empty($_POST["Properties3"])) 
   {
      $Properties3Err = "Please do not keep field empty";
      $flag = true;
   }
  
 
  if(!$flag) 
    {
      $Properties = test_input($_POST["Properties"]);
      $Properties2 = test_input($_POST["Properties2"]);
      $Properties3 = test_input($_POST["Properties3"]);
      

  
     $fileData = read();
if(empty($fileData)) {
$data[] = array("Properties" => $Properties, "Properties2" => $Properties2,"Properties3" => $Properties3);
}
else {
$data = json_decode($fileData);
array_push($data, array("Properties" => $Properties, "Properties2" => $Properties2,"Properties3" => $Properties3));
}
 
      $data_encode = json_encode($data); 
      write("");
      $res = write($data_encode);
      if($res) {
      $successfulMessage = "Sucessfully saved!";
      }
      else {
      $errorMessage = "Error while saving!";
      }
     
    }
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

 function write($content) {
$file = fopen(filepath, "w");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}

?>

  <h1>Visa Details</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset>
      <legend>Visa Details</legend>


       <label for="Properties">Which visa are you applying for?:</label>
<select id="Properties" name="Properties">

    <option value="1">Choose</option>
    <option value="2">Tourist Visa</option>
    <option value="3">Business Visa </option>
    <option value="4">Student Visa</option>
        <span style="color: red"><?php echo $visaErr; ?> </span><br><br>
 
  </select>

  <br>  <br>

    
               <label for="Properties2">Flying From:</label>
<select id="Properties2" name="Properties2">
    <option value="1">Choose</option>
    <option value="2">Bangladesh</option>
    <option value="3">India</option>
    <option value="4">Pakistan</option>
    <option value="2">Nepal</option>
    <option value="3">Myanmar</option>
    <option value="4">Bhutan</option>
      <span style="color: red"><?php echo $visaErr; ?> </span><br><br>


 
  </select>



    <br><br>
          
                   <label for="Properties3">Flying To:</label>
<select id="Properties3" name="Properties3">
      <option value="1">Choose</option>
    <option value="2">United States Of America</option>
    <option value="3">United Kingdom</option>
    <option value="4">United Arab Emirates</option>
    <option value="2">India</option>
    <option value="3">China</option>
    <option value="4">Russia</option>
      <span style="color: red"><?php echo $visaErr; ?> </span><br><br>


 
  </select>
    <br><br>


<button>Submit</button>
    </fieldset>
  </form>

  <br>
  <a href="Tourpackage.php">Go to Tour Package</a>

<?php

function read() {
$file = fopen(filepath, "r");
$fz = filesize(filepath);
$fr = "";
if($fz > 0) {
$fr = fread($file, $fz);
}
fclose($file);
return $fr;
}
?>
  <?php include'footer.php'?>
</body>
</html>