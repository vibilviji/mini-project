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
    $clubname=$_POST["clubname"];
    $place=$_POST["place"];
    $district=$_POST['district'];
    $pincode=$_POST['pincode'];
    $state=$_POST['state'];
$userid=$_SESSION["userid"];





$sql="update club set clubname='$clubname',place='$place',district='$district',pincode=$pincode,state='$state' where userid=$userid";
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
	