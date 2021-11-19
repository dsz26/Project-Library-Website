<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="nav.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
</html>
<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="header navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="/loginsystem"><h2 class="logo">Project <span>Library</span></h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <a class="nav-link" href="adminlogin.php">Admin</a>
    </li>';

      if(!$loggedin){
      echo '<li class="nav-item"><a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i>Login</a>
      </li>';
      }
      if($loggedin){
      echo '<li class="nav-item" style ="margin-right: auto">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>';
    } 
    echo '</ul>
  </div>
</nav>';
?>