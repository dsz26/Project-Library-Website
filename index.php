<?php
session_start();

/*if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Home</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="css/common.css">
 <link rel="stylesheet" href="css/index.css">
 <style>
   .bgimage{
 height: 500px;
 width: 100%;
 background-image: linear-gradient(rgba(0, 0, 0, 0.611),rgba(0, 0, 0, 0.611)),url(img/bgimage2.jpg);
 background-size: cover;
 background-position: center;
}
 </style>
</head>

<body>
 <?php require 'partials/_nav.php' ?>
 <div class="bgimage">
  <div class="tg"><h1>Can't find ideas for your project?</h1></div><br>
  <div class="tg"><h1>We can help you with ideas!</h1></div>
 </div>
 <div class="domain"><h1>Choose a Domain</h1></div>
 <div class="option">
  <div><div class="imgselect" style="text-align: right;"><a href="software.php"><img src="img/software icon.png" alt="Software"><div class="stitle">Software</div></a></div></div>
  <div><div class="imgselect" style="text-align: left;"><a href="hardware.php"><img src="img/hardware icon.png" alt="Hardware"><div class="htitle">Hardware</div></a></div></div>
 </div>
 <footer class="footer">
  <div class="socials">
   <a href="#"><i class="fab fa-linkedin"></i></a>
   <a href="#"><i class="fab fa-instagram"></i></a>
   <a href="#"><i class="fab fa-twitter"></i></a>
   <a href="#"><i class="fab fa-facebook-f"></i></a>
  </div>
  <p class="copyright">&copy 2021 All Rights Reserved</p>
 </footer>
</body>
</html>