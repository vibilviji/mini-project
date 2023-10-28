<?php 
include("header.php");
include("../dbconn.php");
$clubid=$_GET["clubid"];
$sql="select * from club where clubid=$clubid";
$res=mysqli_query($conn,$sql);  
$r=mysqli_fetch_assoc($res);

?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			<h3>Club Name:<?php echo $r["clubname"]?></h3>
            <h3>Email:<?php echo $r["email"]?></h3>
            <h3>Phone:<?php echo $r["phone"]?></h3>
            <h3>Place:<?php echo $r["place"]?></h3>
            <h3>District:<?php echo $r["district"]?></h3>
            <h3>Pincode:<?php echo $r["pincode"]?></h3>
            <h3>State:<?php echo $r["state"]?></h3>
            
            <img src="../register4club/<?php echo $r['licence']?>">
            <br><br>
            <!-- <a class="btn btn-success" href="verify1.php?clubid=<?php echo $clubid?>">Verify</a>

            <a class="btn btn-danger" href="verify2.php?clubid=<?php echo $clubid ?>">Reject</a> -->
        	
                
        	 
        	
        	<div class="clearfix"> </div>
		</div>
		</div>
		</div>

		
<?php
include("footer.php");
?>
	