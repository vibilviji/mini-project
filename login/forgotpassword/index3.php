<?php
include("../../dbconn.php");
$userid=$_POST["userid"];
$question=$_POST["question"];
$answer=$_POST["answer"];
$sql="select * from registration where userid=$userid and securityquestion='$question' and answer='$answer'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Forgot Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">New Password</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	
		      	<form action="passwordupdate.php" method="post" class="signin-form" >
				  <input type="hidden" value="<?php echo $userid?>" name="userid">


						  <div class="form-group">
							<input id="password" type="password" class="form-control" placeholder="password" name="password" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" title="Password must contain at least one digit, one lowercase and one uppercase letter, and be at least 8 characters long.">
							<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
						  </div>
						 

	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Submit</button>
	            </div>
	            
	            
	          </form>
	          
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

<?php

}
else{
?>

<script>
alert("Invalid answer")
window.location.href="index.html"
</script>

<?php
}
?>