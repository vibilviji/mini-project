<?php
include("../dbconn.php");
$target_dir = "uploads/";
$permit = $target_dir . basename($_FILES["permit"]["name"]);
$permitFileType = strtolower(pathinfo($permit,PATHINFO_EXTENSION));
$uploadOk = 1;
$eventid=$_POST["eventid"];
if($permitFileType != "jpg" && $permitFileType != "png" && $permitFileType != "jpeg"
&& $permitFileType != "gif"){
    ?>
    <script>
      alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed")
     // window.location.href="index.html"
    </script>
    <?php
    $uploadOk = 0;
}
if ($_FILES["permit"]["size"] > 800000) {
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
    if (move_uploaded_file($_FILES["permit"]["tmp_name"],$permit)) {
        $sql="update event set permit='$permit' where eventid='$eventid'";
        if(mysqli_query($conn,$sql)){
       
          ?>
          <script>
             alert(
                 "Permit Updated Successfully"
             )
             window.location.href="editevent.php?eventid=<?php echo $eventid?>"
         
             </script>
  
          <?php
      }

    }
  }
?>