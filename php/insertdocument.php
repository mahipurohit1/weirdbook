<?php
include_once("../D_file/d_config.php");
include_once("../F_files/f_script.php");
if (isset($_GET['id'])) {
    $naa = $_GET['id'];
  } else {
    $naa = "Name not set in GET Method";
  }
  
  $unit_id = encryptor('d', base64_decode($naa));
 $pdf= $_POST['pdf'];
 


     $sql = "INSERT INTO `document`(`unit_id`, `pdf`) VALUES ('$unit_id','$pdf')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        header('location: ../admin/admindepartment.php');	
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);

?>