<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: adminlogin.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="add.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
  integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
 <title>Add Project</title>
</head>
<body>
<div class="back"><a href="display.php"><i class="fas fa-caret-left"></i>Back</a></div>  
<div class="container">
 
  <form action="" method="post" enctype="mulipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="name">Project Name:</label>
      </div>
      <div class="col-75">
        <input type="text" name="name" placeholder="Enter Project name">
      </div>
    </div>
    <div class="row">
     <div class="col-25">
       <label for="type">Type of Project:</label>
     </div>
     <div class="col-75">
      <input type="radio" name="type" value="software">
      <label for="software">Software</label><br>
      <input type="radio" name="type" value="hardware">
      <label for="hard">Hardware</label><br>
      <input type="radio" name="type" value="software and hardware">
      <label for="software and hardware">Software and Hardware</label><br>
     </div>
   </div>
    <div class="row">
      <div class="col-25">
        <label for="tech">Technologies used:</label>
      </div>
      <div class="col-75">
        <input type="text" name="tech" placeholder="Enter technologies used">
      </div>
    </div>
    <div class="row">
     <div class="col-25">
       <label for="stu1">Enter Team members:</label>
     </div>
     <div class="col-75">
       <input type="text" name="stu1" placeholder="Enter name">
     </div><br>
    </div>
    <div class="row">
     <div class="col-25">
       <label for="stu2">Enter Team members:</label>
     </div>
     <div class="col-75">
       <input type="text" name="stu2" placeholder="Enter name">
     </div><br>
    </div>
    <div class="row">
     <div class="col-25">
       <label for="stu3">Enter Team members:</label>
     </div>
     <div class="col-75">
       <input type="text" name="stu3" placeholder="Enter name">
     </div><br>
    </div>
    <div class="row">
     <div class="col-25">
       <label for="stu4">Enter Team members:</label>
     </div>
     <div class="col-75">
       <input type="text" name="stu4" placeholder="Enter name">
     </div><br>
    </div>
   <div class="row">
     <div class="col-25">
       <label for="guide">Enter Guide's name:</label>
     </div>
     <div class="col-75">
       <input type="text" name="guide" placeholder="Enter name">
     </div><br>
    </div>
   <div class="row">
     <div class="col-25">
       <label for="aoi">Area of project:</label>
     </div>
     <div class="col-75">
       <input type="text" name="aoi" placeholder="Enter">
     </div><br>
    </div>
  <div class="row">
      <div class="col-25">
        <label for="synop">Abstract: </label>
      </div>
      <div class="col-75">
        <textarea id="synop" name="synop" placeholder="Abstract" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" value="Submit">
    </div>
  </form>
</div>
<?php

$conn = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($conn,'project_library');

if(isset($_POST['submit']))
{
 $name = $_POST['name'];
 $tech = $_POST['tech'];
 $type = $_POST['type'];
 $stu1 = $_POST['stu1'];
 $stu2 = $_POST['stu2'];
 $stu3 = $_POST['stu3'];
 $stu4 = $_POST['stu4'];
 $aoi = $_POST['aoi'];
 $guide = $_POST['guide'];
 $synop = $_POST['synop'];

  $qry ="INSERT INTO projects (name,type,tech,stu1,stu2,stu3,stu4,guide,aoi,synop) VALUES ('$name','$type','$tech','$stu1','$stu2','$stu3','$stu4','$guide','$aoi','$synop')";
  
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