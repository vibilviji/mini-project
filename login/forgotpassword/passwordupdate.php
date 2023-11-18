<?php
include("../../dbconn.php");
$password=$_POST["password"];
$userid=$_POST["userid"];
$sql="update registration set password='$password' where userid=$userid";
if(mysqli_query($conn,$sql)){
    ?>
    <script>
alert("Password updated successfully")
window.location.href="../index.html"
</script>

    <?php
}

?>