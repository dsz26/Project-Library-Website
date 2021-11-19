<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects-page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
  integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="css/try.css">
</head>
<body>

<?php require 'partials/_nav.php' ?>
<div class="container">
<div class="back"><a href="projects.php"><i class="fas fa-caret-left"></i>Back</a></div>
<div class="select-btn"><div class="tdiv"><a href="hardware.php" class="atag"><span class="type"><img src="img/hardware icon.png" alt="Hardware"></span>Hardware</a></div>
  <div class="tdiv"><span><a href="software.php" class="atag"><span class="type"><img src="img/software icon.png" alt="Software"></span>Software</a></div></div>
 <form action="search.php" method="GET">
  <input class="search" type="text" name="search" placeholder="Search for projects">
  <button class="search-btn"><i class="fas fa-search"></i></button>
 </form>
  <?php
$con = mysqli_connect("127.0.0.1", "root", "");
$db = mysqli_select_db($con,'project_library');

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
$qry="SELECT id,name,tech,image FROM projects WHERE type='Hardware' OR type='Software and Hardware' ORDER BY id ASC;";
$data= mysqli_query($con,$qry);
$total= mysqli_num_rows($data);
//$result=mysqli_fetch_array($data);
if($total > 0)
{
 while($result=mysqli_fetch_array($data)){
  ?>
  <ul id="projectsList">
  <li class="project">
   <h2><?php echo $result['name'];  ?></h2>
   <p>Technology used: <?php  echo $result['tech'];  ?></p>
   <button type="button" class="btn btn-primary"><a target="_blank" href="project_details.php?id=<?php echo $result['id'];  ?>" > View More</a></button>
   <img src="img/<?php  echo $result['image'];  ?>"></img>
  </li>
  </ul>
  <?php            
 }
}
 ?>
</div>
<footer class="footer">
  <div class="socials">
    <a href="#"><i class="fab fa-linkedin"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
  </div>

  <ul class="list">
    <li><a href="projects.php">Projects</a></li>
  </ul>
  <p class="copyright">&copy 2021 All Rights Reserved</p>
</footer>
</body>
</html>