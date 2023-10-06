<?php 
include("header.php");
include("../dbconn.php");
$clubid=$_GET["clubid"];
$sql="update club set admin_status=2 where clubid=$clubid";
if(mysqli_query($conn,$sql)){
    ?>
    <script>
    alert("Club verification rejected")
    window.location.href("index.php")
    </script>

    <?php
}

                
        	 