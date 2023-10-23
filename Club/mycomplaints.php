<?php

include("header.php");
$userid=$_SESSION["userid"];

?>

<div id="page-wrapper">
    <div class="main-page">
        <h3>My complaints</h3>
        <br><br>

        <?php 
        include("../dbconn.php");                                    
        $sql="select * from clubcomplaints where userid=$userid";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
    ?>
   
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                   <p class="card-text">Subject:<?php echo $row['subject'] ?></p>
                    <p class="card-text">Complaint:<?php echo $row['complaint'] ?></p>
                    <p class="card-text">Reply:<?php echo $row['reply'] ?></p>

                    <br><br>
                   
                   
                
    <?php

            }}
        else {
        echo "No users with userid = 0 found.";
        }

     
        ?>
        <div class="clearfix"></div>
</div>
</div>
<?php
include("footer.php");
?>
		
		
