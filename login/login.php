<?php
session_start();
require("../dbconn.php");

$email=$_POST["username"];
$password=$_POST["password"];
$sql="select * from registration where email='$email' and password='$password'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
  $r=mysqli_fetch_assoc($res);
  $usertype=$r["usertype"];
  $userid=$r["userid"];
  $_SESSION["userid"]=$userid;
  $_SESSION["usertype"]=$usertype;
  if($usertype=="admin"){
    header('location:../Admin/index.php');
  }
  if($usertype=="user"){
    header('location:../User/index.html');
  }

 if ($usertype=="club"){
    $sql2="select admin_status from club where userid=$userid";
    $admin_status=mysqli_query($conn,$sql2);
    $s=mysqli_fetch_assoc($admin_status);
    echo $sql2;
    //echo $s;
    if($s["admin_status"]==1){
      header('location:../Club/index.php');

    }
    else{
      ?>
      <script>
       alert("Sorry you are not verified")
       window.location.href("index.html")
      </script>

      <?php
    }
  

}
if($usertype=="user"){
        header('location:../User/index.html');
}
else{
    ?>
    <script>
        alert("Invalid email id or password")
      //  window.location.href="../index.html"
    </script>
    <?php
}
}
else{
  ?>
    <script>
        alert("Invalid email id or password")
        window.location.href="../index.html"
    </script>
    <?php
}
?>