


<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
	<title>Tourist list</title>
    <link rel="stylesheet" href="../NEEHAL/View/css/createtouristlist.css"></link>
    <script src="../NEEHAL/View/js/createtouristlist.js"></script>
</head>
<body>




 
<form method="POST" name = "createTlist" onsubmit="add(this); return false;">
<br>
	<p id="list"><b>CREATE TOURIST LIST</p>

	<fieldset id="fsl">
		
       <label for="touristname"></label><span style="color:maroon;">Tourist name:</span>
       <input type="text" id="touristname" name="touristname">
       <span id="touristnameErr" style="color:red;"></span>
      
       <br><br>


       <label for="touristid"></label><span style="color:maroon;">Tourist ID:</span>
       <input type="text" id="touristid" name="touristid" pattern="[0-9]+">
       <span id="touristidErr" style="color:red;"></span>
       
       <br><br>


       <label for="touristmembers"></label><span style="color:maroon;">Group/family members of the Tourist:</span>
       <input type="text" id="touristmembers" name="touristmembers">
       <span id="touristmembersErr" style="color:red;"></span>
      
       <br><br>


       <label for="visitingtime"></label><span style="color:maroon;">Visiting Time:</span>
       <input type="text" id="visitingtime" name="visitingtime">
       <span id="visitingtimeErr" style="color:red;"></span>
       
       <br><br>


       <label for="duration"></label><span style="color:maroon;">Duration of the stay in the tour:</span>
       <input type="text" id="duration" name="duration">
       <span id="durationErr" style="color:red;"></span>
       
       <br><br>

       <label for="phone"></label><span style="color:maroon;">Phone number:</span>
       <input type="tel" id="phone" name="phone">
       <span id="phoneErr" style="color:red;"></span>
       
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
    <p align=right><a href="../NEEHAL/View/Tlist.php">Back</ap>





</body>
</html>