<?php 
include("header.php");
?>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
            <table class="table">
            <thead>
                <tr>
                  
                    <th>Subject</th>
                    <th>Complaint</th>
                    <th>User name</th>
                    <th>Contact</th>
                    <th></th>

                   
                </tr>
            </thead>
            <tbody>
            <?php
            include("../dbconn.php");
            $sql="select * from clubcomplaints inner join registration on clubcomplaints.userid=registration.userid";

            $res=mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){

            ?>
            <tr>

            <td><?php echo $row['subject']?></td>
            <td><?php echo $row['complaint']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?><br>
            <?php echo $row['phone']?>
            </td>
            <td>
                <a href="replycomplaint.php?complaintid=<?php echo $row['complaint_id']?>" class="btn btn-primary">Reply Now</a>
            </td>

        
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
	