<?php
include("../../dbconn.php");
$email=$_POST["email"];
$sql="select * from registration where email='$email'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	$r=mysqli_fetch_assoc($res);
	$userid=$r['userid'];
	$securityquestion=$r['securityquestion'];
	$answer=$r['answer'];

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
					<h2 class="heading-section">Forgot Password</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	
		      	<form action="index3.php" method="post" class="signin-form" >
		      		<input type="hidden" value="<?php echo $userid?>" name="userid">
					

                    <div class="form-group">
                        <input type="text" class="form-control" name="question" value="<?php echo $securityquestion?>" readonly id="question" placeholder="Security question" required>
                      </div>

						  <div class="form-group">
							<input type="text" class="form-control" name="answer" id="answer" placeholder="answer" required>
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
alert("Invalid email address")
window.location.href="index.html"
</script>

<?php
}
?>
