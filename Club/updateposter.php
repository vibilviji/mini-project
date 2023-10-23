<?php
include("../dbconn.php");
$target_dir = "uploads/";
$poster = $target_dir . basename($_FILES["poster"]["name"]);
$posterFileType = strtolower(pathinfo($poster,PATHINFO_EXTENSION));
$uploadOk = 1;
$eventid=$_POST["eventid"];
if($posterFileType != "jpg" && $posterFileType != "png" && $posterFileType != "jpeg"
&& $posterFileType != "gif"){
    ?>
    <script>
      alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed")
     // window.location.href="index.html"
    </script>
    <?php
    $uploadOk = 0;
}
if ($_FILES["poster"]["size"] > 800000) {
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
    if (move_uploaded_file($_FILES["poster"]["tmp_name"],$poster)) {
        $sql="update event set description='$poster' where eventid='$eventid'";
        if(mysqli_query($conn,$sql)){
       
          ?>
          <script>
             alert(
                 "Poster Updated Successfully"
             )
             window.location.href="editevent.php?eventid=<?php echo $eventid?>"
         
             </script>
  
          <?php
      }

    }
  }
?>