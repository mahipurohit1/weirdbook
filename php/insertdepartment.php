<?php
include_once("../D_file/d_config.php");
include_once("../F_files/f_script.php");

 $department = $_POST['department'];

     $sql = "INSERT INTO `department`(`dept_name`) VALUES ('$department')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header('location: ../admin/admindepartment.php');	
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

?>
