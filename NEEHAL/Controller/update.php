<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
    <title>Update</title>
    <link rel="stylesheet" href="../NEEHAL/View/css/update.css"></link>
    <script src="../NEEHAL/View/js/update.js"></script>
</head>
<body id="updateschema">


<form  method="POST" name = "update" onsubmit="add(this); return false;">
    <p id="paraUp">UPDATE SCHEMA</p>
    <br>
    <div id="updatecustomer">
    <label for="customerid">Enter customer ID you want to update :</label>
    <input type="text" id="customerid" name="customerid">
    <span id="customeridErr" style="color:red;"></span>
    <br><br>
    </div>

        <fieldset id="fsUp">
            <legend id="lgndUp">
                <b> SPOT 1: </b>
            </legend>
     
     
     <label for="day1"></label><span style="color:darkolivegreen">Day 1:</span>
     <select id="day1" name="day1">
         <option value="sunday">Sunday</option>
         <option value="monday">Monday</option>
         <option value="tuesday">Tuesday</option>
     </select>
     <br><br>

     <label for="place1"></label><span style="color:darkolivegreen;">Spot 1:</span>
     <input type="text"id="place1" name="place1">
     <span id="place1Err" style="color:red;"></span>
     
     <br><br>

     <label for="start"></label><span style="color:darkolivegreen;">Outset Time:</span>
     <input type="text" id="start" name="start">
     <span id="startErr" style="color:red;"></span>
     
     <br><br>

     <label for="end"></label><span style="color:darkolivegreen;">Pack-Up Time:</span>
     <input type="text" id="end" name="end">
     <span id="endErr" style="color:red;"></span>
     
     <br><br>

     <label for="meal"></label><span style="color:darkolivegreen;">Dine-out:</span>
     <input type="text" id="meal" name="meal">
     <span id="mealErr" style="color:red;"></span>
     
     <br><br>

     <label for="cuisine"></label><span style="color:darkolivegreen;">Cuisine:</span>
     <input type="text" id="cuisine" name="cuisine">
     <span id="cuisineErr" style="color:red;"></span>
     
     <br><br>
     </fieldset><br>

     <fieldset id="fsUp">
     <legend>
         <b>SPOT 2: </b>
     </legend>
     
     <label for="day2"></label><span style="color:darkolivegreen">Day 2:</span>
     <select id="day2" name="day2">
         <option value="thursday">Thursday</option>
         <option value="friday">Friday</option>
         <option value="saturday">Saturday</option>
     </select>
     <br><br>

      <label for="place2"></label><span style="color:darkolivegreen;">Spot 2:</span>
     <input type="text"id="place2" name="place2">
     <span id="place2Err" style="color:red;"></span>
     
     <br><br>

     <label for="start1"></label><span style="color:darkolivegreen;">Outset Time:</span>
     <input type="text" id="start1" name="start1">
     <span id="start1Err" style="color:red;"></span>
     
     <br><br>

     <label for="end1"></label><span style="color:darkolivegreen;">Pack-Up Time:</span>
     <input type="text" id="end1" name="end1">
     <span id="end1Err" style="color:red;"></span>
    
     <br><br>

     <label for="meal1"></label><span style="color:darkolivegreen;">Dine-out:</span>
     <input type="text" id="meal1" name="meal1">
     <span id="meal1Err" style="color:red;"></span>
    
     <br><br>

     <label for="cuisine1"></label><span style="color:darkolivegreen;">Cuisine:</span>
     <input type="text" id="cuisine1" name="cuisine1">
     <span id="cuisine1Err" style="color:red;"></span>
     
     <br><br>
     </fieldset><br>

     <fieldset id="fsUp">
         <legend>
             <b>SPOT 3:</b>
         </legend>
    
     <label for="day3"></label><span style="color:darkolivegreen">Day 3:</span>
     <select id="day3" name="day3">
         <option value="sunday">Sunday</option>
         <option value="monday">Monday</option>
         <option value="wednesday">Wednesday</option> 
     </select>
     <br><br>

    <label for="place3"></label><span style="color:darkolivegreen;">Spot 3:</span>
     <input type="text"id="place3" name="place3">
     <span id="place3Err" style="color:red;"></span>
    
     <br><br>

     <label for="start2"></label><span style="color:darkolivegreen;">Outset Time:</span>
     <input type="text" id="start2" name="start2">
     <span id="start2Err" style="color:red;"></span>
     
     <br><br>

     <label for="end2"></label><span style="color:darkolivegreen;">Pack-Up Time:</span>
     <input type="text" id="end2" name="end2">
     <span id="end2Err" style="color:red;"></span>
     
     <br><br>

     <label for="meal2"></label><span style="color:darkolivegreen;">Dine-out:</span>
     <input type="text" id="meal2" name="meal2">
     <span id="meal2Err" style="color:red;"></span>

     <br><br>

     <label for="cuisine2"></label><span style="color:darkolivegreen;">Cuisine:</span>
     <input type="text" id="cuisine2" name="cuisine2"> 
     <span id="cuisine2Err" style="color:red;"></span>


    </fieldset>
    <br>

    <input type="submit" name="Submit"> 
    <br>
        
<div id="updateajax"></div>
<br>
<p align=right><a href="../NEEHAL/View/Tschema.php">Back</ap>



</body>
</html>