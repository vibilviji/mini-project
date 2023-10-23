<?php

include("header.php");
include("../dbconn.php");
$userid=$_SESSION["userid"];
$eventid=$_GET["eventid"]; 
$sql="select * from event where eventid=$eventid";
$res=mysqli_query($conn,$sql);  
$r=mysqli_fetch_assoc($res);    

?>

<div id="page-wrapper">
    <div class="main-page">
    






			<h3>Eventname:  <?php echo $r["eventname"]?></h3>
            <br>
            <h3>Promoter:  <?php echo $r["promoter"]?></h3>
            <br>
            <h3>Venue:  <?php echo $r["venue"]?></h3>
            <br>
            <h3>Booking start date: <?php echo $r["booking_start_date"]?></h3>
            <br>
            <h3>Booking end date:    <?php echo $r["booking_end_date"]?></h3>
            <br>
            <h3>Event start date:   <?php echo $r["event_start_date"]?></h3>
            <br>
            <h3>Booking end date:   <?php echo $r["event_end_date"]?></h3>
            <br>
            <h3>Booking fee:    <?php echo $r["booking_fee"]?></h3>
            <br>


            <img src="../Club/<?php echo $r['description']?>" width="360" height="240">
           



            
            
         
          
        	
                
    
        
        
    
    <div class="clearfix"> </div>
</div>
</div>
</div>
<?php
include("footer.php");
?>
		
		
