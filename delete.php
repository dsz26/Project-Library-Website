<?php
 $conn = mysqli_connect('127.0.0.1','root','');
 mysqli_select_db($conn,'project_library');

 $id = $_GET['id'];
 $query ="DELETE FROM projects WHERE id=$id";
 $final = mysqli_query($conn,$query);
 header('location:display.php');
?>
