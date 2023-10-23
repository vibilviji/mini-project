<?php

include("header.php");
include("../dbconn.php");
$eventid=$_GET["eventid"]; 
$sql="select * from event where eventid=$eventid";
$res=mysqli_query($conn,$sql);  
$r=mysqli_fetch_assoc($res);    

?>

<div id="page-wrapper">
    <div class="main-page">
    




    <img src="../Club/<?php echo $r['description']?>" width="360" height="240">
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
            <br><br><br>

            
            <h3>Select Number of Seats</h3>
    <form action="payment/index.php" method="post">

        <input type="hidden" name="booking_fee" value="<?php echo $r["booking_fee"]?>" id="booking_fee">
        <input type="hidden" name="eventid" value="<?php echo $eventid ?>">

        
        <div class="row">
            <div class="col-md-6">
            <label>Number of Seats</label>
            <select name="seatCount" id="seatCount" class="form-control" onchange="setPayment()" required>
                <option selected value="" disabled>Select Number of seats</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            </div>
            <div class="col-md-6">
            <label>Total Payment</label>
            <input type="text" id="payment" class="form-control" name="payment" placeholder="Payment" readonly required>
            </div>
        </div>
        <!-- <a href="" class="btn btn-primary py-3 px-5">PAY NOW</a> -->
        <button type="submit">Pay Now</button>


    </form>


    
<?php
include("footer.php");
?>
        

            
            
         
          
        	
                
    
        
        
    
    <div class="clearfix"> </div>
</div>
</div>
</div>
<script>
    function setPayment(){
        var seatcount=document.getElementById("seatCount").value
        var booking_fee=document.getElementById("booking_fee").value
        document.getElementById("payment").value=seatcount*booking_fee
        console.log(seatcount*booking_fee)
    }
</script>
<?php
include("footer.php");
?>