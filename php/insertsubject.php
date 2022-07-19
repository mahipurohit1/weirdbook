<?php
include_once("../D_file/d_config.php");
include_once("../F_files/f_script.php");
if (isset($_GET['id'])) {
    $n = $_GET['id'];
  } else {
    $n = "Name not set in GET Method";
  }
  
  $sub_id = encryptor('d', base64_decode($n));
 $subject = $_POST['subject'];
 


     $sql = "INSERT INTO `subject`(`ds_id`, `subject_name`) VALUES ('$sub_id ',' $subject')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header('location: ../admin/admindepartment.php');	
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

?>