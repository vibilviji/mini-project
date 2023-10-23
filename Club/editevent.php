<?php
include("header.php");
require("../dbconn.php");
$eventid=$_GET["eventid"];

$sql="select * from event where eventid=$eventid";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);

?>
<div id="page-wrapper">
    <div class="main-page">
   
	<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
	<div class="form-title">
		<h4>Create Event</h4>
	</div>
	<form action="updateevent.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="eventid" value="<?php echo $eventid?>">
	<div class="form-body">
		
		<div class="form-group"> 
		<label>Promoter</label> 
		<input type="text" class="form-control" id="promoter" name="promoter" placeholder="promoter" required="" value="<?php echo $row['promoter']?>"> </div>
		<div class="form-group"> 
		<label>Racetype:<?php echo $row['racetype']?></label> 
		 <select id="racetype" name="racetype"   required="" > 
        <option value=" circuit"> circuit </option>
        <option value="4w rally">4w rally</option>
         <option value="Drag race">Drag race</option>
        <option value="Drifting">Drifting</option>
   		 </select>
	    </div>
		<div class="form-group"> 
		

		<div class="form-group"> 
		<label>Eventname</label> 
		<input type="text" class="form-control" id="eventname" name="eventname" placeholder="eventname" required="" value="<?php echo $row['eventname']?>"> </div>

		<div class="form-group"> 
		<label>Venue</label> 
		<input type="text" class="form-control" id="venue" name="venue" placeholder="venue" required=""  value="<?php echo $row['venue']?>" > </div>

		<div class="form-group"> 
		
		<label for="dob">Booking start date</label><br>
        <input type="date" id="bookingstartdate" name="bookingstartdate" required value="<?php echo $row['booking_start_date']?>"> </div>

		<div class="form-group"> 
		
		<label for="dob">Booking end date</label><br>
        <input type="date" id="bookingenddate" name="bookingenddate" required value="<?php echo $row['booking_end_date']?>"> </div>


		<div class="form-group"> 
		
		<label for="dob">Event start date</label><br>
        <input type="date" id="eventstart" name="eventstart" required  value="<?php echo $row['event_start_date']?>"> </div>

		<div class="form-group"> 
		
		<label for="dob">Booking end date</label><br>
        <input type="date" id="eventend" name="eventend" required   value="<?php echo $row['event_end_date']?>"> </div>


		<div class="form-group"> 
		<label>Booking fee</label> 
		<input type="text" class="form-control" id="booking fee" name="bookingfee" placeholder="booking fee" required=""  value="<?php echo $row['booking_fee']?>" > </div>
		<button type="submit" name="update" class="btn btn-default">Update</button> 
        </form>
		<div class="form-group"> 



	    <form action="updatepermit.php" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="eventid" value="<?php echo $eventid?>">
        <label>Permit</label> 
		<input type="file" id="permit" name="permit" required=""></div> 

        <img src="<?php echo $row['permit']?>" width="360" height="240">
		<button type="submit" name="updatepermit" class="btn btn-default">Update</button> 
       </form>
     

        <br><br>

	<form action="updateposter.php" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="eventid" value="<?php echo $eventid?>">
		<label>Poster</label> 
		<input type="file" id="Description" name="poster" required></div> 
        <img src="<?php echo $row['description']?>" width="360" height="240">
		<button type="submit" name="updateposter" class="btn btn-default">Update</button> 
    </form>

        <br>
        <br>
		
        

		


		<!-- <div class="form-group"> <label for="exampleInputPassword1">Password</label> <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> </div> 
		<div class="form-group"> <label for="exampleInputFile">File input</label> <input type="file" id="exampleInputFile"> <p class="help-block">Example block-level help text here.</p> </div> 
		<div class="checkbox"> <label> <input type="checkbox"> Check me out </label> </div> -->
	
	</div>
</div>
   
</div>
</div>
<?php
include("footer.php");
?>
		
	