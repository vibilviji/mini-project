<?php
session_start();
require("../dbconn.php");
$userid=$_SESSION["userid"];
$promoter=$_POST["promoter"];
$racetype=$_POST["racetype"];

//$permit=$_POST["permit"];


$eventname=$_POST["eventname"];
$venue=$_POST["venue"];
$booking_start_date=$_POST["bookingstartdate"];
$booking_end_date=$_POST["bookingenddate"];
$event_start_date=$_POST["eventstart"];
$event_end_date=$_POST["eventend"];
$booking_fee=$_POST["bookingfee"];

//$description=$_POST["clubseal"];



$target_dir = "uploads/";
$permit = $target_dir . basename($_FILES["permit"]["name"]);
$description=$target_dir . basename($_FILES["Description"]["name"]);
$uploadOk = 1;
$permitFileType = strtolower(pathinfo($permit,PATHINFO_EXTENSION));
$descriptionFileType = strtolower(pathinfo($description,PATHINFO_EXTENSION));

if($permitFileType != "jpg" && $permitFileType != "png" && $permitFileType != "jpeg"
&& $permitFileType != "gif" && $descriptionFileType !="jpg" && $descriptionFileType != "png" && $descriptionFileType != "jpeg"
&& $descriptionFileType != "gif") {
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
if ($_FILES["Description"]["size"] > 500000) {
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
        if (move_uploaded_file($_FILES["Description"]["tmp_name"], $description))
        {

            $sql="insert into event(userid,promoter,racetype,permit,eventname,venue,booking_start_date,booking_end_date,event_start_date,event_end_date,booking_fee,description)values('$userid','$promoter','$racetype','$permit','$eventname','$venue','$booking_start_date','$booking_end_date','$event_start_date','$event_end_date','$booking_fee', '$description')";
            if(mysqli_query($conn,$sql)){
            echo"inserted";
{
            ?>
            <script>
               alert(
                   "Event created"
               )
               window.location.href="index.php"
           
               </script>
    
            <?php
}

        }
    }

    }
}
?>


        




