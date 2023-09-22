<?php
require("../dbconn.php");

$clubname=$_POST["clubname"];
$clubemail=$_POST["clubemail"];
$clubphone=$_POST["clubphone"];
$clubcity=$_POST["clubcity"];
$clubdistrict=$_POST["clubdistrict"];
$clubpincode=$_POST["clubpincode"];

$name=$_POST["Name"];
$email=$_POST["Email"];
$phone=$_POST["Phone"];
$housename=$_POST["HouseName"];
$place=$_POST["place"];
$district=$_POST["district"];
$pincode=$_POST["Pincode"];
$state=$_POST["state"];
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
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["licence"]["name"]);
$idproof=$target_dir . basename($_FILES["idproof"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$idproofType = strtolower(pathinfo($idproof,PATHINFO_EXTENSION));

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $idproofFileType !="jpg" && $idproofFileType != "png" && $idproofFileType != "jpeg"
&& $idproofFileType != "gif") {
  ?>
  <script>
    alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed")
   // window.location.href="index.html"
  </script>
  <?php
  $uploadOk = 0;
}
if ($_FILES["licence"]["size"] > 800000) {
    ?>
    <script>
      alert("Please reduse file size")
   //   window.location.href="index.html"
    </script>
    <?php
    $uploadOk = 0;
}
if ($_FILES["idproof"]["size"] > 500000) {
  ?>
  <script>
    alert("Please reduse file size")
 //   window.location.href="index.html"
  </script>
  <?php
  $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["licence"]["tmp_name"], $target_file)) {
    //   echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    if (move_uploaded_file($_FILES["idproof"]["tmp_name"], $target_file)){
      $sql2="insert into registration (Name,Email,Phone,Password,securityquestion,answer,usertype)values('$name','$email','$phone','$password','$securityquestion','$answer','$club')";
      if(mysqli_query($conn,$sql2)){
       $sql3="select userid from registration where email='$email'";
       $res=mysqli_query($conn,$sql3);
       $r=mysqli_fetch_assoc($res);
       $userid=$r["userid"];
       $sql4="insert into club(userid,clubname,email,phone,place,district,pincode,state,licence,admin_status)values('$userid','$clubname','$email','$phone','$place','$district','$pincode','$state','$target_file',0)";
       if(mysqli_query($conn,$sql4)){
        $sql5="insert into users(userid,housename,place,district,pincode,state,id_proof)values('$userid','$housename','$place','$district','$pincode','$state','$idproof')";
        if(mysqli_query($conn,$sql5)){
          ?>
          <script>
           alert(
               "Registration Successful"
           )
           window.location.href="../index.html"
       
           </script>
          <?php


        }
        else{
          ?>
          <script>
           alert(
               "Error occured please try again"
           )
           window.location.href="../index.html"
       
           </script>
          <?php
        }
       }
      
  
      }
    }
    


     
    } else {
    echo "Sorry, there was an error uploading your file.";
    }
  }
}

?>