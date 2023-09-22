<?php
session_start();
require("../dbconn.php");

$email=$_POST["username"];
$password=$_POST["password"];
echo $email;
echo $password;
$sql="select * from registration where email='$email' and password='$password'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
  $r=mysqli_fetch_assoc($res);
  $usertype=$r["usertype"];
  $userid=$r["userid"];
  $_SESSION["userid"]=$userid;
  $_SESSION["usertype"]=$usertype;
  if($usertype=="admin"){
    header('location:../Admin/index.html');
  }
  if($usertype=="user"){
    header('location:../User/index.html');
  }

 if ($usertype=="club"){
    header('location:../Club/index.php');
  

}
if($usertype=="user"){
        header('location:../User/index.html');
}
else{
    ?>
    <script>
        alert("Invalid email id or password")
        window.location.href="../index.html"
    </script>
    <?php
}
}
?>