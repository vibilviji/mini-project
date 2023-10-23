<?php
session_start();
require("../../dbconn.php");
$userid=$_SESSION["userid"];
$eventid=$_POST["eventid"];
$no_of_seats=$_POST["no_of_seats"];
$payment=$_POST["payment"];
$clubid=$_POST["clubid"];

    $sql="insert into payment(userid,eventid,no_of_seats,payment,clubid)values('$userid','$eventid','$no_of_seats','$payment','$clubid')";
            if(mysqli_query($conn,$sql)){
                ?>
                <script>
                   alert(
                       "Payment successful"
                   )
                   window.location.href="../index.php"
               
                   </script>
        
                <?php
}