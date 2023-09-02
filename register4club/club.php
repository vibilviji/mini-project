<?php
require("../dbconn.php");
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["licence"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  ?>
  <script>
    alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed")
   // window.location.href="index.html"
  </script>
  <?php
  $uploadOk = 0;
}
if ($_FILES["licence"]["size"] > 500000) {
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

    } else {
    echo "Sorry, there was an error uploading your file.";
    }
  }

?>