<?php
include("header.php");
include("../dbconn.php");
$complaint_id=$_GET['complaintid'];
$sql="select * from clubcomplaints where complaint_id=$complaint_id";
$res = mysqli_query($conn, $sql);
$r=mysqli_fetch_assoc($res);
?>


<div id="page-wrapper">
    <div class="main-page">
  
        <h1>Complaint Page</h1>
   
    <form action="sendreply.php" method="POST">
      <input type="hidden" value='<?php echo $complaint_id?>' name="complaintid">

        <label for="subject">subject:</label>
        <input class="form-control" type="text" id="subject" name="subject" value='<?php echo $r['subject']?>' readonly>

        
<label for="complaint">Complaint:</label>
        <input type="text" class="form-control" id="complaint" value='<?php echo $r['complaint']?>' name="complaint" readonly>
<label>Reply</label>
<textarea class="form-control" id="complaint" name="reply" required>
    <?php echo $r['reply']?>
</textarea>


     
        <button type="submit">Submit Reply</button>
    </form>
  


        
        
    
    <div class="clearfix"> </div>
</div>
</div>
</div>

<?php
include("footer.php");
?>
		
		
