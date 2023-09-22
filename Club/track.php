<?php
include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">
   
    <div class="main-page signup-page">
				<h2 class="title1">Add Track</h2>
				<div class="sign-up-row widget-shadow">
					<h5>Personal Information :</h5>
				<form action="clubtrack.php" method="POST">
					<div class="sign-u">
								<input type="text" name="track_name" placeholder="Track Name" required="">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="text" name="location" placeholder="Location" required=" Location">
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
								<input type="text" name="pincode" placeholder="Pincode"  required=" Pincode" required pattern="[0-9]{6}" >
						<div class="clearfix"> </div>
					</div>



					<label>class</label>
    <select id="fruit" name="class">
        <option value=" circuit"> circuit </option>
        <option value="4w rally">4w rally</option>
         <option value="Drag race">Drag race</option>
        <option value="Drifting">Drifting</option>
    </select>
<br><br>






		<label for="time">staring time:</label>
        <input type="time" id="time" name="starting_time" required>	

		<label for="time">ending time:</label>
        <input type="time" id="time" name="ending time" required>	

					
					
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
		
		
