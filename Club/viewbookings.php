<?php
include("header.php");
include("../dbconn.php");
$eventid=$_GET["eventid"]; 
$sql2="select * from event where eventid=$eventid";
$res2 = mysqli_query($conn, $sql2);
$row2=mysqli_fetch_assoc($res2);
?>
<div id="page-wrapper">
    <div class="main-page">
    <h2><?php echo $row2["eventname"]?></h2>
    <table class="table">

    <thead>
        <tr>
          
			<th>Name</th>
            <th>Address</th>
         
            <th>Number of Seats</th>
            <th>Payment</th>



			
		
        </tr>
    </thead>
    <tbody>
    <?php
    $sql="select * from payment,registration where  payment.eventid=$eventid and payment.userid=registration.userid";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {

    ?>
    <td><?php echo $row["name"]?></td>
    <td>
        <?php echo $row["email"]?><br>
        <?php echo $row["phone"]?><br>
    </td>
    <td><?php echo $row["no_of_seats"]?></td>
    <td><?php echo $row["payment"]?></td>

    <td



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
		
		
