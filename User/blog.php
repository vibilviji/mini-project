<?php
include("header.php");
$userid=$_SESSION["userid"];

?>

<div id="page-wrapper">
    <div class="main-page">
        <h3>My Blogs</h3>
        <br><br>

        <?php 
        include("../dbconn.php");
        $sql="select * from clubblog,club where clubblog.userid=club.userid";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <div class="row">
        <div class="card" style="width: 10rem;">
           <h3><?php echo $row['clubname'] ?></h3>
            <img class="card-img-top" src="../Club/<?php echo $row['image']?>" alt="Card image cap" width="360" height="240">
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text"><?php echo $row['blog'] ?></p>
                   
                   
                </div>
        </div>
    </div>
    <?php

            }}
      

     
        ?>
        <div class="clearfix"></div>
</div>
</div>
<?php
include("footer.php");
?>
		
		
