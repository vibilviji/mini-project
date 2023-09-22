<?php
include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">
    
    <div class="main-page signup-page">
				<h2 class="title1">Event Creation</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Personal Information :</h5>
				<form action="#" method="post">
					<div class="sign-u">
								<input type="text" id="org" name="firstname" placeholder="Name of organization/promoter" required="">
						<div class="clearfix"> </div>
					</div>
					
					
	
					<div class="form-group">
									<label class="col-sm-2 control-label">Race type</label>
									<div class="col-sm-8">
										<select multiple="" class="form-control1">
											<option>Rally</option>
											<option>Circuit</option>
											<option>Drag race</option>
											<option>Drift </option>
											
										</select>
									</div>
								</div>


	
<br>


	<br><br>
	<br>
					<label for="permit">permit:</label><br>
        <input type="file" id="Permit" name="Permit" required>
				<br>
                    <div class="sign-u">
								<input type="text" name="nameofevent" placeholder="Name of the event" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="text" name="city" placeholder="venue/city" required="">
						<div class="clearfix"> </div>
					</div>
					<br>
					
   <label for="dob">Booking start date</label><br>
        <input type="date" id="dob" name="dob" required>
				<br>	
		<label for="dob">Booking End Date</label><br>
        <input type="date" id="dob" name="dob" required><br><br>
					<br>
					<label for="dob">Start date</label><br>
        <input type="date" id="dob" name="dob" required>
				<br>	
		<label for="dob">End Date</label><br>
        <input type="date" id="dob" name="dob" required><br><br>
		<label>Club seal</label>
   <input type="file" placeholder=" " required="">




						<div class="clearfix"> </div>
					</div>
					


	

 
						<div class="clearfix"> </div>
					<div class="sub_home">
							<input type="submit" value="Submit">
						<div class="clearfix"> </div>
					</div>
					<div class="registration">
						Already Registered.
						<a class="" href="login.html">
							Login
						</a>
					</div>
				</form>
				</div>
			</div>
    
        
    
    <div class="clearfix"> </div>
</div>
</div>
</div>
<?php
include("footer.php");
?>
		
	