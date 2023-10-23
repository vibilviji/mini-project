<?php
session_start();
require("../dbconn.php");

    $userid=$_SESSION["userid"];
    $promoter=$_POST["promoter"];
    $racetype=$_POST["racetype"];
    $eventname=$_POST["eventname"];
    $venue=$_POST["venue"];
    $booking_start_date=$_POST["bookingstartdate"];
    $booking_end_date=$_POST["bookingenddate"];
    $event_start_date=$_POST["eventstart"];
    $event_end_date=$_POST["eventend"];
    $booking_fee=$_POST["bookingfee"];
    $eventid=$_POST["eventid"];

    $sql="update event set promoter='$promoter',racetype='$racetype',eventname='$eventname',venue='$venue',booking_start_date='$booking_start_date',booking_end_date='$booking_end_date',event_start_date= '$event_start_date',event_end_date='$event_end_date',booking_fee='$booking_fee' where eventid=$eventid";
 
    if(mysqli_query($conn,$sql)){
       
        ?>
        <script>
           alert(
               "Event Updated Successfully"
           )
           window.location.href="editevent.php?eventid=<?php echo $eventid?>"
       
           </script>

        <?php
    }

    

?>