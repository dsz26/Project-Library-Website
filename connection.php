<?php

$con = mysqli_connect("127.0.0.1", "root", "");
$db = mysqli_select_db($con,'project_library');

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}

?>



