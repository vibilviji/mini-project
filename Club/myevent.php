<?php
include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">
    
    
	<table class="table">
    <thead>
        <tr>
            <th>#</th>
			<th>Eventname</th>
            <th>Promoter</th>
			<th>venue</th>
            <th>Booking fee</th>
		
        </tr>
    </thead>
    <tbody>
    <?php 

include("../dbconn.php");
$userid=$_SESSION["userid"];

$sql="select * from event where userid=$userid";

$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
?>


<tr>
            <th scope="row">1</th>
            <td><?php echo $row["eventname"]?></td>
            <td><?php echo $row["promoter"]?></td>
            <td><?php echo $row["venue"]?></td>
            <td><?php echo $row["booking_fee"]?></td>
            <td>
                <a class="btn btn-primary" href="viewmyevent.php?eventid=<?php echo $row['eventid']?>">View Details</a>
            </td>
           
        </tr>
        <?php
}
}
?>
	
    
    <div class="clearfix"> </div>
</div>
</div>
</div>
<?php
include("footer.php");
?>
		
		
