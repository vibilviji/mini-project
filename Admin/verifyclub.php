<?php 
include("header.php");
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Club Name</th>
            <th>Phone</th>
            <th>Place</th>
            <th>Email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php 
include("../dbconn.php");
$sql="select * from club where admin_status=0";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_assoc($res)){
?>
        <tr>
            <th scope="row">1</th>
            <td><?php echo $row["clubname"]?></td>
            <td><?php echo $row["phone"]?></td>
            <td><?php echo $row["place"]?></td>
            <td><?php echo $row["email"]?></td>
            <td>
                <a class="btn btn-primary" href="verify.php?clubid=<?php echo $row['clubid']?>">View</a>
            </td>
           
        </tr>
        <?php
}
}
?>
    </tbody>
</table>

        	
                
        	 
        	
        	<div class="clearfix"> </div>
		</div>
		</div>
		</div>

		
<?php
include("footer.php");
?>
	