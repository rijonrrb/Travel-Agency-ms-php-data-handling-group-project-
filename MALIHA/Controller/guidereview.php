
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tour Guide Review Section Form</title>
  <link rel="stylesheet" type="text/css" href="../MALIHA/view/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../MALIHA/view/css/bootstrap-grid.min.css">

  <script type="text/javascript" src="../MALIHA/view/cssbootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../MALIHA/view/cssbootstrap.min.js"></script>
    <link rel="stylesheet" href="../MALIHA/view/cssguidereview.css">
  <style>
h1 {text-align: center;}

</style>

</head>

  <body >
   <?php 

if($_SERVER['REQUEST_METHOD'] == "POST") 
{

  if(empty($_POST["review"])) 
   {
      $reviewErr = "Please do not keep field empty";
      $flag = true;
   }
  if(empty($_POST["rating"])) 
   {
      $ratingErr = "Please do not keep field empty";
      $flag = true;
   }
 
  if(!$flag) 
    {
      $review = test_input($_POST["review"]);
      $rating = test_input($_POST["rating"]);
  
     $fileData = read();
     if(empty($fileData)) {
$data[] = array("review" => $review, "rating" => $rating);
}
else {
$data = json_decode($fileData);
array_push($data, array("review" => $review, "rating" => $rating));
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

?>
  
  <h1> Tour Guide Review Section Form</h1>
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name = "reg" onsubmit="return isValid()";>


    <fieldset>
    
      <label  for="guidereview"><h2>Please share your review:</h2></label>

        <textarea >
     
    </textarea>

      <br><br>

 <input type="radio" id="excellent" name="review"<?php if (isset($review) && $review=="Male") echo "checked";?> value="excellent">
<label for="excellent">Excellent</label><br>
<input type="radio" id="verygood" name="review"<?php if (isset($review) && $review=="Male") echo "checked";?> value="verygood">
<label for="verygood">Very Good</label><br>
<input type="radio" id="good" name="review"<?php if (isset($review) && $review=="Male") echo "checked";?> value="good">
<label for="good">Good</label><br>
<input type="radio" id="average" name="review"<?php if (isset($review) && $review=="Male") echo "checked";?> value="average">
<label for="average">average</label><br>
<input type="radio" id="bad" name="review"<?php if (isset($review) && $review=="Male") echo "checked";?> value="bad">
<label for="bad">Bad</label>

<br> <br>
<button class="btn btn-warning">Submit</button>
    </fieldset>
  </form>

  <br>


</body>
</html>