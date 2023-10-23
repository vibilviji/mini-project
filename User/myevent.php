<?php

include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">
<?php

?>
    <h1>My Events</h1>
    <table class="table">
    <thead>
        <tr>
            
			<th>Eventname</th>
          
			<th>venue</th>
            <th>Booking fee</th>
            <th>Number of Seats</th>
            <th>Total Payment</th>
		
        </tr>
    </thead>
    <tbody>
    <?php
    include("../dbconn.php");
    $userid=$_SESSION["userid"];
    $sql="select * from event,payment where event.eventid=payment.eventid and payment.userid=$userid";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {

    ?>

<tr>
          
            <td><?php echo $row["eventname"]?></td>
           
            <td><?php echo $row["venue"]?></td>
            <td> ₹<?php echo $row["booking_fee"]?></td>
            <td><?php echo $row["no_of_seats"]?></td>
            <td> ₹<?php echo $row["payment"]?></td>


            <td>
                <a class="btn btn-primary" href="viewmyevent.php?eventid=<?php echo $row['eventid']?>">View Details</a>
            </td>
           
        </tr>
        <?php
}
}
?>
</tbody>
</table>
</div>
<div class="clearfix"> </div>

<h3>My Participated Events</h3>
    
<table class="table">
    <thead>
        <tr>
           
			<th>Eventname</th>
          
			<th>venue</th>
            
		
        </tr>
    </thead>
    <tbody>
    <?php
    include("../dbconn.php");
    $userid=$_SESSION["userid"];
    $sql="select * from event,event_participate where event.eventid=event_participate.eventid and event_participate.userid=$userid";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {

    ?>

<tr>
          
            <td><?php echo $row["eventname"]?></td>
           
            <td><?php echo $row["venue"]?></td>
           

            <td>
                <a class="btn btn-primary" href="viewmyevent.php?eventid=<?php echo $row['eventid']?>">View Details</a>
            </td>
           
        </tr>
        <?php
}
}
?>
</tbody>
</table>
        
        
    
    <div class="clearfix"> </div>
</div>
</div>
</div>
<?php
include("footer.php");
?>