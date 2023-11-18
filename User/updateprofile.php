<?php
session_start();
include("../dbconn.php");
if(isset($_POST['profile']))
{
    $name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$userid=$_SESSION["userid"];

$sql="update registration set name='$name',email='$email',phone=$phone where userid=$userid";
if(mysqli_query($conn,$sql)){

    ?>
          <script>
             alert(
                 "Profile Updated Successfully"
             )
             window.location.href="editprofile.php"
         
             </script>
  
          <?php
}

}
else if(isset($_POST['personal']))
{
    $housename=$_POST['housename'];
    $place=$_POST['place'];
    $district=$_POST['district'];
    $pincode=$_POST['pincode'];
$userid=$_SESSION["userid"];


    $sql="update users set housename='$housename',place='$place',district='$district',pincode=$pincode where userid=$userid";
    if(mysqli_query($conn,$sql)){
 
    ?>
          <script>
             alert(
                 "Profile Updated Successfully"
             )
             window.location.href="editprofile.php"
         
             </script>
  
          <?php
}

}



?>