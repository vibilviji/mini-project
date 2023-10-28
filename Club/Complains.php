<?php
include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">

    <header>
        <h1>Complaint Page</h1>
    </header>
    <form action="clubcomplains.php" method="POST">
      

        <label for="subject">subject:</label>
        <input class="form-control" type="text" id="subject" name="subject" required>

        
<label for="complaint">Complaint:</label>
        <textarea class="form-control" id="complaint" name="complaint" required></textarea>

     
        <button class="btn btn-primary" type="submit">Submit Complaint</button>
    </form>  
    
    <div class="clearfix"> </div>
</div>
</div>
</div>
<?php
include("footer.php");
?>
		
		
