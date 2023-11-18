<?php
include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">
        <h1>My Profile</h1>
        <?php
        include("../dbconn.php");
        $userid=$_SESSION["userid"];
        $sql="select * from registration where userid=$userid";
        $res=mysqli_query($conn,$sql);
        $r=mysqli_fetch_assoc($res);
        ?>
    <br><br>
    <h3>Name:<?php echo $r['name']?></h3>
    <h3>Email:<?php echo $r['email']?></h3>
    <h3>Phone:<?php echo $r['phone']?></h3>
   <br>
<a class='btn btn-primary' href='editprofile.php'>Edit Profile</a>




    

</div>
</div>
<?php
include("footer.php");
?>
		
		
