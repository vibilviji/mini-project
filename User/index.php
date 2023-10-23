<?php
include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">
<div class="row">
<?php
include("../dbconn.php");
$sql="select * from event";

$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){


?>
<div class="col-md-6">
<div class="card border-primary mb-3">
  <img class="card-img-top" src="../Club/<?php echo $row['description']?>" alt="Card image cap" width="360" height="240">
  <div class="card-body">
    <h2 class="card-title"><?php echo $row["eventname"]?></h2>
    <h4 class="card-title">Venue : <?php echo $row["venue"]?></h2>
    <h5 class="card-title">Booking starts at <?php echo $row["booking_start_date"]?></h2>
   
    <a class="btn btn-primary" href="viewevent.php?eventid=<?php echo $row['eventid']?>">View Details</a>

  </div>
</div>
</div>
<?php
 }
}
?>
<div>

    
    
        
        
    
    <div class="clearfix"> </div>
</div>
</div>
</div>
<?php
include("footer.php");
?>
		
		
