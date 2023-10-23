<?php
include("../dbconn.php");
$complaintid=$_POST["complaintid"];
$reply=$_POST["reply"];
$sql="update clubcomplaints set reply='$reply' where complaint_id='$complaintid'";
if(mysqli_query($conn,$sql)){
    ?>
        <script>
           alert(
               "Reply added successfully"
           )
           window.location.href="index.php"
       
           </script>

        <?php
}

?>