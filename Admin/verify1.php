<?php 
include("header.php");
include("../dbconn.php");
$clubid=$_GET["clubid"];
$sql="update club set admin_status=1 where clubid=$clubid";
if(mysqli_query($conn,$sql)){
    ?>
    <script>
    alert("Club verification successfull")
    window.location.href("index.php")
    </script>

    <?php
}

                
        	 