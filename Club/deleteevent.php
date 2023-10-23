<?php
include("../dbconn.php");
$eventid=$_GET["eventid"];

$sql="delete from event where eventid='$eventid'";

if(mysqli_query($conn,$sql)){
    ?>
        <script>
           alert(
               "Event Deleted Successfully"
           )
           window.location.href="myevent.php"
       
           </script>

        <?php
}

?>