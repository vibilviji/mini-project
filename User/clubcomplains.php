<?php 
session_start();
include("../dbconn.php");
$userid=$_SESSION["userid"];
$subject=$_POST["subject"];
$complaint=$_POST["complaint"];








$sql2="insert into clubcomplaints (userid,subject,complaint)values('$userid','$subject','$complaint')";
      if(mysqli_query($conn,$sql2))

{
?>
<script>
 alert(
     "complaint registered"
 )
 window.location.href="index.php"

 </script>
 <?php
 }
 

?> 