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
    $eventid=$_POST["eventid"]

    $sql="update event set promoter='$promoter', where eventid=$eventid";

    

?>