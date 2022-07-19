<?php
include_once("../D_file/d_config.php");
include_once("../F_files/f_script.php");
if (isset($_GET['id'])) {
   $n = $_GET['id'];
 } else {
   $n = "Name not set in GET Method";
 }
 
 $sub_id = encryptor('d', base64_decode($n));
 $unit = $_POST['unit'];
 


     $sql = " INSERT INTO `unit`( `sub_id`, `unit_name`) VALUES  ('$sub_id ',' $unit')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header('location: ../admin/admindepartment.php');	
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

?>