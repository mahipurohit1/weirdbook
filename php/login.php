<?php
include_once("../D_file/d_config.php");
include_once("../F_files/f_script.php");

$username = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT `id`, `email`, `password` FROM `user` WHERE 1";
$result = mysqli_query($conn , $sql);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        if($username == $row["email"] && $password == $row["password"]){
          
            header('location: ../admin/admindashboard.php');	
        }else{
            ?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/weirdbook1/admin/adminlogin.php" />

         <script>
        alert("invalid user");
   </script>
          <?php
        }
    }
}
?>