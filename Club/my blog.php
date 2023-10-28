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
        $sql="select * from clubblog where userid=$userid";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
    ?>
    <div class="row">
        <div class="card" style="width: 10rem;">
            <h5 class="card-header">Featured</h5>
            <img class="card-img-top" src="<?php echo $row['image']?>" alt="Card image cap" width="360" height="240">
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text"><?php echo $row['blog'] ?></p>
                   
                    <a href="deleteblog.php?blogid=<?php echo $row['blog_id']?>" class="btn btn-primary">Delete</a>
                </div>
        </div>
    </div>
    <?php

            }}
        else {
        echo "";
        }

     
        ?>
        <div class="clearfix"></div>
</div>
</div>
<?php
include("footer.php");
?>
		
		
