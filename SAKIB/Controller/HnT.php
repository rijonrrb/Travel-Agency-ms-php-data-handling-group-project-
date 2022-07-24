<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<link rel="stylesheet" href="../View/css/hntA.css"></link>
</head>
<body>

    <?php
include '../Model/dbhntD.php';
// define variables to empty values  
$hotelnameErr = $roomtypeErr = $roomfErr = $htypeErr = $compErr = $hlocErr = $hpriceErr  =$vehiclemodelErr = $vehicleareaErr = $vehicleseatErr =$vehicledurErr = $vehiclefeeErr   = $vehicleidErr = "";  
$hotelname = $roomtype = $roomf = $htype = $comp = $hloc = $hprice  =$vehiclemodel = $vehiclearea = $vehicleseat =$vehicledur = $vehiclefee   = $vehicleid = "";   
$flag = false;
$successfulMessage = $errorMessage = "";
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["hotelname"])) 
    {  
       $hotelnameErr = " Field Cannot be empty ";
       $flag = True;  
    } 
    if (empty($_POST["roomtype"])) 
    {  
        $roomtypeErr = " Field Cannot be empty ";
        $flag = True;  
    } 
    if (empty($_POST["roomf"])) 
    {  
        $roomfErr = " Field Cannot be empty ";
        $flag = True;  
    }      

    if (empty($_POST["htype"])) 
    {  
        $htypeErr = " Field Cannot be empty ";
        $flag = True;  
    }  

    if (empty($_POST["comp"])) 
    {  
        $compErr = " Field Cannot be empty ";
        $flag = True;  
    } 
    if (empty($_POST["hloc"])) 
    {  
        $hlocErr = " Field Cannot be empty ";
        $flag = True;  
    } 
        if (empty($_POST["hprice"])) 
    {  
        $hpriceErr = " Field Cannot be empty ";
        $flag = True;  
    } 
    
    if (empty($_POST["vehicleid"])) 
    {  
        $vehicleidErr = " Field Cannot be empty ";
        $flag = True;  
    } 

        if (empty($_POST["vehiclemodel"])) 
    {  
        $vehiclemodelErr = " Field Cannot be empty ";
        $flag = True;  
    } 

    if (empty($_POST["vehiclearea"])) 
    {  
       $vehicleareaErr = " Field Cannot be empty ";
       $flag = True;  
    } 

    if (empty($_POST["vehicleseat"])) 
    {  
       $vehicleseatErr = " Field Cannot be empty ";
       $flag = True;  
    } 
    if (empty($_POST["vehicledur"])) 
    {  
       $vehicledurErr = " Field Cannot be empty ";
       $flag = True;  
    } 

    if (empty($_POST["vehiclefee"])) 
    {  
       $vehiclefeeErr = " Field Cannot be empty ";
       $flag = True;  
    } 

    
    if(!$flag) 
    {
      $hotelname = input_data($_POST["hotelname"]);
      $roomtype = input_data($_POST["roomtype"]);
      $roomf = input_data($_POST["roomf"]);
      $htype = input_data($_POST["htype"]);
      $comp = input_data($_POST["comp"]);
      $hloc = input_data($_POST["hloc"]);
      $hprice = input_data($_POST["hprice"]);
      $vehicleid = input_data($_POST["vehicleid"]);
      $vehiclemodel = input_data($_POST["vehiclemodel"]);
      $vehiclearea = input_data($_POST["vehiclearea"]);
      $vehicleseat = input_data($_POST["vehicleseat"]);
      $vehicledur = input_data($_POST["vehicledur"]);
      $vehiclefee = input_data($_POST["vehiclefee"]);
      
      
        $res = reg($hotelname, $roomtype, $roomf, $htype, $comp, $hloc, $hprice,  $vehiclefee, $vehiclemodel,$vehiclearea, $vehicleseat, $vehicledur,$vehicleid);
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
include '../view/nheading.php';
?>
<h1>Adding Hotel & Transportation Information</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
  <fieldset>
    <legend><h3>Hotels Information</h3></legend>
    <br>
    <label for="hotelname">Enter Hotel Name:</label>
    <input type="text" id="hotelname" name="hotelname">
    <span style="color: red"><?php echo $hotelnameErr; ?> </span> <br><br>
    <label for="roomtype">Enter Room type:</label>
    <select name="roomtype" id="roomtype">
    <option></option>
    <option value="Singel bed">Singel bed</option>
    <option value="Dual bed">Dual bed</option>
    <option value="King bed">King Bed</option>
    </select>
    <span style="color: red"><?php echo $roomtypeErr; ?> </span> <br><br>
    <label for="roomf">Enter Room feature:</label>
    <textarea name="roomf" id="roomf" rows="4" cols="40"></textarea>
    <span style="color: red"><?php echo $roomfErr; ?> </span> <br><br>   
    <label for="htype">Enter Hotel type:</label>
    <select name="htype" id="type">
    <option></option>
    <option value="2 Star">2 Star</option>
    <option value="3 Star">3 Star</option>
    <option value="4 Star">4 Star</option>
    <option value="5 Star">5 Star</option>
    <option value="7 Star">7 Star</option>
    </select>
    <span style="color: red"><?php echo $htypeErr; ?> </span> <br><br>
    <label for="comp">Hotel complementaries:</label>
    <textarea name="comp" id ="comp" rows="4" cols="40"></textarea>
    <span style="color: red"><?php echo $compErr; ?> </span> <br><br>
    <label for="hloc">Hotel Location:</label>
    <textarea name="hloc" id="hloc" rows="4" cols="40"></textarea>
    <span style="color: red"><?php echo $hlocErr; ?> </span> <br><br>
    <label for="hprice">Enter Price:</label>
    <input type="text" id="hprice" name="hprice">
    <span style="color: red"><?php echo $hpriceErr; ?> </span> <br><br>
    <br>
    </fieldset>

    <fieldset>
    <legend><h3>Transportation Information</h3></legend>
    <br>
    <label for="vehicleid">Vehicle ID:</label>
    <input type="text" id="vehicleid" name="vehicleid">
    <span style="color: red"><?php echo $vehicleidErr; ?> </span> <br><br>

    <label for="vehiclemodel">Vehicle Model:</label>
    <select name="vehiclemodel" id="vehiclemodel">
    <option></option>
    <option value="SUV">SUV</option>
    <option value="VAN">VAN</option>
    <option value="SEDAN">SEDAN</option>
    <option value="MINI BUS">MINI BUS</option>
    </select>
    <span style="color: red"><?php echo $vehiclemodelErr; ?> </span> <br><br>

    <label for="vehiclearea">Visting Area:</label>
    <textarea name="vehiclearea" id="vehiclearea" rows="4" cols="40"></textarea>
    <span style="color: red"><?php echo $vehicleareaErr; ?> </span> <br><br>

    <label for="vehicleseat">Number of Seat:</label>
    <input type="text" id="vehicleseat" name="vehicleseat">
    <span style="color: red"><?php echo $vehicleseatErr; ?> </span> <br><br>

    <label for="vehicledur">Visiting Duration:</label>
    <input type="text" id="vehicledur" name="vehicledur">
    <span style="color: red"><?php echo $vehicledurErr; ?> </span> <br><br>


    <label for="vehiclefee">Vehicle Price:</label>
    <input type="text" id="vehiclefee" name="vehiclefee">
    <span style="color: red"><?php echo $vehiclefeeErr; ?> </span> <br><br><br>
    </fieldset>



  <br><br><div style="text-align : center"><input type="submit" value="Submit" id="subb"></div>
</form>
 <br>
 
 <span style="color: green"><?php echo "<b>".$successfulMessage."</b>"; ?></span>
<span style="color: red"><?php echo "<b>".$errorMessage."</b>"; ?></span>

</body>
</html>