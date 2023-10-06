<?php 
session_start();
include("../dbconn.php");
$blog=$_POST["blog"];
$userid=$_SESSION["userid"];

$target_dir = "uploads/";
echo $target_dir . basename($_FILES["filetoupload"]["name"]);
$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo $imageFileType;


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif") {

?>
  <script>
    alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed")
   
  </script>
<?php
}

if ($_FILES["filetoupload"]["size"] > 800000) {
    ?>
    <script>
      alert("Please reduse file size")
  
    </script>
    <?php
    $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";

} else {
  if (move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file)) {
    $sql2="insert into clubblog (blog,userid,image)values('$blog','$userid','$target_file')";
      if(mysqli_query($conn,$sql2))
      {
        ?>
        <script>
           alert(
               "Blog Uploaded"
           )
           window.location.href="index.php"
       
           </script>

        <?php

      }
  }
}


  ?>
          
