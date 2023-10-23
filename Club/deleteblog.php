<?php
require("../dbconn.php");
$blogid=$_GET['blogid'];
$sql="delete from clubblog where blog_id=$blogid";
if(mysqli_query($conn,$sql)){
    ?>
    <script>
       alert(
           "Blog deleted successfully"
       )
       window.location.href="myblog.php"
   
       </script>

    <?php
}

?>