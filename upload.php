<?php
  $conn = mysqli_connect('127.0.0.1','root','');
  $db= mysqli_select_db($conn,'project_library');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="test.css">
</head>
<body>
 <div class="row">
  <div class="col-25">
   <label for="image">Upload image:</label>
  </div>
  <div class="col-75">
   <input type="file" name="imgage" id="image">
  </div><br>
 </div>
 <input type="submit" name="upload" value="Upload">
<?php
if (isset($_POST['upload'])){
 $file = array();
 $file = $_FILES['image'];

 $filename = $file['name'];
 $qry = "INSERT INTO uploads(image) VALUES ('$filename')";
 $ans = mysqli_query($conn,$qry);
 if($ans){
   echo '<script type="text/javascript"> alert("Entry Succesful!")</script>';
 }
 else{
   echo '<script type="text/javascript"> alert("Entry Failed!")</script>';
 }
}
else{
 echo "Failed";
}
 
?>
</body>
</html>