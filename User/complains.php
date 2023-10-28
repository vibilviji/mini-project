<?php
include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">
    
    




    
        <h1>Complaint Page</h1>
   
    <form action="clubcomplains.php" method="POST">
      

        <label for="subject">subject:</label>
        <input type="text" class="form-control" id="subject" name="subject" required>

        
<label for="complaint">Complaint:</label>
        <textarea id="complaint" class="form-control" name="complaint" required></textarea>

     
        <button class="btn btn-primary" type="submit">Submit Complaint</button>
    </form>
  


        
        
    
    <div class="clearfix"> </div>
</div>
</div>
</div>
<?php
include("footer.php");
?>
		
		
