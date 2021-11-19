<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: adminlogin.php");
    exit;
}

?>
<?php
include("connection.php");
$bid=$_GET['id'];
$qry="SELECT * FROM projects WHERE id =$bid";
$data= mysqli_query($con,$qry);
$result=mysqli_fetch_assoc($data);
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/project_details.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/common.css">
  <title><?php echo $result['name'];  ?></title>
</head>
<body>
<?php require 'partials/admin_nav.php' ?>
 
    <div class="container">
    <div class="back"><a href="display.php"><i class="fas fa-caret-left"></i>Back</a></div>   
      <div class="project-title"><h1><?php echo $result['name'];  ?></h1></div>
      <div class="tech"><div class="text-title">Project category:</div><div class="desc"><?php echo $result['type'];  ?></div></div>
      <div class="tech"><div class="text-title">Technologies used:</div><div class="desc"><?php echo $result['tech'];  ?></div></div>
      <div class="text-title">Project made by:</div>
      <div class="desc">
        <ul>
          <li><?php echo $result['stu1'];  ?></li>
          <li><?php echo $result['stu2'];  ?></li>
          <li><?php echo $result['stu3'];  ?></li>
          <li><?php echo $result['stu4'];  ?></li>
        </ul></div>
      <div class="tech"><div class="text-title">Project guide: </div><div class="desc"><?php echo $result['guide'];  ?></div></div>
      <div class="text-title">Abstract:</div>
      <div class="desc"><?php echo $result['synop'];  ?></div>
      <div class="desc"><a href="pdfs/<?php echo $result['file']; ?>"  target="_blank">📁Click Here for Synopsis</a></div>
      <div class="video-box"><video class="video-fluid z-depth-1" autoplay loop controls muted>
        <source src="img/<?php echo $result['video'];  ?>" type="video/mp4" />
      </video></div>
      
    </div>           
</body>
</html>
