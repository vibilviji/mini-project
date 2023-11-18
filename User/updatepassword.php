<?php
session_start();
include("../dbconn.php");
$userid=$_SESSION['userid'];
$password=$_POST["new_password"];

$sql="update registration set password='$password' where userid=$userid";
if(mysqli_query($conn,$sql)){
?>
<script>
             alert(
                 "Password updated successfully"
             )
             window.location.href="index.php"
         
             </script>
<?php
}

?>