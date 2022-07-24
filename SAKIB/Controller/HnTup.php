<!DOCTYPE html>
<html>
<head>
<title>Travel Agency</title>
<link rel="stylesheet" href="../View/css/hntU.css"></link>
</head>
<body>


<?php
include '../view/nheading.php';
?>
<?php
include '../Model/dbhntD.php';
$hotelname = $roomtype = $roomf = $htype = $comp = $hloc = $hprice  =$vehiclemodel = $vehiclearea = $vehicleseat =$vehicledur = $vehiclefee   = $vehicleid = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") { 
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


        $res = updateH($roomtype,$roomf, $htype, $comp, $hloc, $hprice,$hotelname);
        if($res) {
        echo "<span style='color: green;'>Successfully Updated Hotel Info....</span><br>";
        }
        else {
        echo "<span style='color: red;'>Error while Updated Hotel Info...</span><br>";
        }
        $ress = updateT($vehiclemodel,  $vehiclearea, $vehicleseat, $vehicledur, $vehiclefee, $vehicleid);
        if($ress) {
        echo "<span style='color: green;'>Successfully Updated Transportation Info....</span>";
        }
        else {
        echo "<span style='color: red;'>Error while Updated Transportation Info...</span><br>";
        }
      }

  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  } 
?>
<h1><h1>Updating Hotel & Transportation Information</h1></h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
  <fieldset>
    <legend><h3>Hotels Information</h3></legend>
    <br>
    <label for="hotelname">Enter Name of the Hotel, Which details you want to change:</label>
    <input type="text" id="hotelname" name="hotelname">
    <span id="hotelnameErr"></span>
    <br><br>
    <label for="roomtype">Enter Room type:</label>
    <select name="roomtype" id="roomtype">
    <option></option>
    <option value="Singel bed">Singel bed</option>
    <option value="Dual bed">Dual bed</option>
    <option value="King bed">King Bed</option>
    </select>
    <span id="roomtypeErr"></span>
    <br><br>
    <label for="roomf">Enter Room feature:</label>
    <textarea name="roomf" rows="4" cols="40"></textarea>
    <span id="roomfErr"></span>
    <br><br>   
    <label for="htype">Enter Hotel type:</label>
    <select name="htype" id="type">
    <option></option>
    <option value="2 Star">2 Star</option>
    <option value="3 Star">3 Star</option>
    <option value="4 Star">4 Star</option>
    <option value="5 Star">5 Star</option>
    <option value="7 Star">7 Star</option>
    </select>
    <span id="htypeErr"></span>
    <br><br>
    <label for="comp">Hotel complementaries:</label>
    <textarea name="comp" rows="4" cols="40"></textarea>
    <span id="compErr"></span>
    </span> <br><br>
    <label for="hloc">Hotel Location:</label>
    <textarea name="hloc" rows="4" cols="40"></textarea>
    <span id="hlocErr"></span>
    <br><br>
    <label for="hprice">Enter Price:</label>
    <input type="text" id="hprice" name="hprice">
    <span id="hpriceErr"></span>
     <br><br>
    <br>
    </fieldset>

    <fieldset>
    <legend><h3>Transportation Information</h3></legend>
    <br>
    <label for="vehicleid">Enter Vehicle ID, Which details you want to change :</label>
    <input type="text" id="vehicleid" name="vehicleid">
    <span id="vehicleidErr"></span>
    <br><br>

    <label for="vehiclemodel">Vehicle Model:</label>
    <select name="vehiclemodel" id="type">
    <option></option>
    <option value="SUV">SUV</option>
    <option value="VAN">VAN</option>
    <option value="SEDAN">SEDAN</option>
    <option value="MINI BUS">MINI BUS</option>
    </select>
    <span id="vehiclemodelErr"></span>
    <br><br>

    <label for="vehiclearea">Visting Area:</label>
    <textarea name="vehiclearea" rows="4" cols="40"></textarea>
    <span id="vehicleareaErr"></span>
    <br><br>

    <label for="vehicleseat">Number of Seat:</label>
    <input type="text" id="vehicleseat" name="vehicleseat">
    <span id="vehicleseatErr"></span>
    <br><br>

    <label for="vehicledur">Visiting Duration:</label>
    <input type="text" id="vehicledur" name="vehicledur">
    <span id="vehicledurErr"></span>
    <br><br>


    <label for="vehiclefee">Vehicle Price:</label>
    <input type="text" id="vehiclefee" name="vehiclefee">
    <span id="vehiclefeeErr"></span>
    <br><br><br>
    </fieldset>



  <br><br><div style="text-align : center"><input type="submit" value="Submit" id="subb"></div>
</form>
 <br>
<div id="Hntup"></div>
</body>
</html>