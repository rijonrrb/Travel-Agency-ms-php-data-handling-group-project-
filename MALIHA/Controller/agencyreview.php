
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Agency Review Section Form</title>
   <link rel="stylesheet" type="text/css" href="../MALIHA/view/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../MALIHA/view/css/bootstrap-grid.min.css">

  <script type="text/javascript" src="../MALIHA/view/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../MALIHA/view/js/bootstrap.min.js"></script>
      <script src="../MALIHA/view/js/agencyreview.js"></script>
    <link rel="stylesheet" href="../MALIHA/view/css/agencyreview.css">

</head>

  <body>
    <?php  
  

if($_SERVER['REQUEST_METHOD'] == "POST") 
{

  if(empty($_POST["agencyreview"])) 
   {
      $agencyreviewErr = "Please do not keep field empty";
      $flag = true;
   }
  if(empty($_POST["rating"])) 
   {
      $ratingErr = "Please do not keep field empty";
      $flag = true;
   }
 
  if(!$flag) 
    {
      $agencyreview = test_input($_POST["agencyreview"]);
      $rating = test_input($_POST["rating"]);
  
    
    }
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}


?>
    
  <h1> Agency Review Section Form</h1>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "reg" onsubmit="return isValid()";>

    <fieldset >
    
      <label  for="agencyreview"><h2>Please share your review:<span >*</span></h2></label><br>

        <textarea>
     
    </textarea>

      <br><br>

<label for="Rating">Rating:</label><span >*</span>
<select id="Rating" name="Rating">
    <option value="1">Give Rating</option>
    <option value="2">Excellent</option>
    <option value="3">Very Good </option>
    <option value="4">Good</option>
    <option value="5">Average</option>
    <option value="6">Bad</option>
  </select>
  <br><br>

<button class="btn btn-warning">Submit</button>
    </fieldset>
  </form>

  <br>


</body>
</html>