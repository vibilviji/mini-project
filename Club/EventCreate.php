<?php
include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">
   
	<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
	<div class="form-title">
		<h4>Create Event</h4>
	</div>
	<form action="event.php" method="POST" enctype="multipart/form-data">
	<div class="form-body">
		<form> 
		<div class="form-group"> 
		<label>Promoter</label> 
		<input type="text" class="form-control" id="promoter" name="promoter" placeholder="promoter" required="" > </div>
		<div class="form-group"> 
		<label>Racetype</label> 
		 <select id="racetype" name="racetype" name="racetype"   required="" > 
        <option value=" circuit"> circuit </option>
        <option value="4w rally">4w rally</option>
         <option value="Drag race">Drag race</option>
        <option value="Drifting">Drifting</option>
   		 </select>
	    </div>
		<div class="form-group"> 
		<label>Permit</label> 
		<input type="file" id="permit" name="permit"></div> 


		<div class="form-group"> 
		<label>Eventname</label> 
		<input type="text" class="form-control" id="eventname" name="eventname" placeholder="eventname" required="" > </div>

		<div class="form-group"> 
		<label>Venue</label> 
		<input type="text" class="form-control" id="venue" name="venue" placeholder="venue" required="" > </div>

		<div class="form-group"> 
		
		<label for="dob">Booking start date</label><br>
        <input type="date" id="bookingstartdate" name="bookingstartdate" required> </div>

		<div class="form-group"> 
		
		<label for="dob">Booking end date</label><br>
        <input type="date" id="bookingenddate" name="bookingenddate" required> </div>


		<div class="form-group"> 
		
		<label for="dob">Event start date</label><br>
        <input type="date" id="eventstart" name="eventstart" required> </div>

		<div class="form-group"> 
		
		<label for="dob">Booking end date</label><br>
        <input type="date" id="eventend" name="eventend" required> </div>


		<div class="form-group"> 
		<label>Booking fee</label> 
		<input type="text" class="form-control" id="booking fee" name="bookingfee" placeholder="booking fee" required="" > </div>

		<div class="form-group"> 
		<label>Poster</label> 
		<input type="file" id="Description" name="Description"></div> 
		
        

		


		<!-- <div class="form-group"> <label for="exampleInputPassword1">Password</label> <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> </div> 
		<div class="form-group"> <label for="exampleInputFile">File input</label> <input type="file" id="exampleInputFile"> <p class="help-block">Example block-level help text here.</p> </div> 
		<div class="checkbox"> <label> <input type="checkbox"> Check me out </label> </div> -->
		<button type="submit" class="btn btn-default">Submit</button> 
		</form> 
	</div>
</div>
   
</div>
</div>
<?php
include("footer.php");
?>
		
	