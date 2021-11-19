<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: adminlogin.php");
    exit;
}

?>
<?php
  $conn = mysqli_connect('127.0.0.1','root','');
  mysqli_select_db($conn,'project_library');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add/Edit Projects</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
  integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="display.css">
</head>
<body>
<?php require 'partials/admin_nav.php' ?>
<div class="back"><a href="adminwelcome.php"><i class="fas fa-caret-left"></i>Back</a></div>  
<div class="container">
  <a class="clr" href="add-edit.php"> <button  class="btn btn-primary">Add Project</button></a>
</div>
<div class="container">           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr No.</th>
        <th>Project Name</th>
        <th>View Details</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>
    </thead>
    <?php
      $sno =1;
      $query = "SELECT * FROM projects ORDER BY id";
      $res = mysqli_query($conn,$query);
      while($total = mysqli_fetch_array($res)){
          ?>
    <tbody>
      <tr>
        <td><?php echo $sno++; ?></td>
        <td><?php echo $total['name']; ?></td>
        <td><a class="clr" href="project_admin_details.php?id=<?php echo $total['id']; ?>"><button class="btn btn-info">View More</button></a></td>
        <td><a class="clr" href="delete.php?id=<?php echo $total['id']; ?>"><button class="btn btn-danger">Delete</button></a></td>
        <td><a class="clr" href="update.php?id=<?php echo $total['id']; ?>"><button class="btn btn-success">Update</button></a></td>
      </tr>
    </tbody>
    <?php
      }
    ?>
  </table>
</div>

</body>
</html>
