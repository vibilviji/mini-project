<?php
require("../dbconn.php");
$username=$_POST["username"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$securityquestion=$_POST["securityquestion"];
$answer=$_POST["answer"];
$sql="select email from registration where email='$email'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
   ?>
   <script>
    alert(
        "User already exist"
    )
    window.location.href="index.html"

    </script>
   <?php
}
else{
$sql2="insert into registration (name,email,phone,password,securityquestion,answer,usertype)values('$username','$email','$phone','$password','$securityquestion','$answer','user')";
if(mysqli_query($conn,$sql2)){
    ?>
    <script>
     alert(
         "Registration Successful"
     )
     window.location.href="../index.html"
 
     </script>
    <?php
}

}





?>