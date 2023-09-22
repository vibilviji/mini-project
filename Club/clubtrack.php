<?php 
session_start();
include("../dbconn.php");
$userid=$_SESSION["userid"];
$track_name=$_POST["track_name"];
$location=$_POST["location"];
$pincode=$_POST["pincode"];
$class=$_POST["class"];
$starting_time=$_POST["starting_time"];
$ending_time=$_POST["ending_time"];






$sql2="insert into clubtrack (userid,track_name,Location,Pincode,class,starting_time,ending_time)values('$userid','$track_name','$location','$pincode','$class','$starting_time','$ending_time')";
      if(mysqli_query($conn,$sql2))

{
?>
<script>
 alert(
     "Track Added Successfully"
 )
 window.location.href="index.php"

 </script>
 <?php
 }
 

?> 