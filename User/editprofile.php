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
    <form method="POST" action="updateprofile.php">

        <div class='col-md-6'>
        <label>Name</label>
        <input type='text' class='form-control' name='name' value='<?php echo $r['name']?>' required>
        </div>
        <div class='col-md-6'>
        <label>Email</label>
        <input type='text' class='form-control' name='email' value='<?php echo $r['email']?>' required>
        </div>
        <div class='col-md-6'>
        <label>Phone</label>
        <input type='text' class='form-control' name='phone' value='<?php echo $r['phone']?>' required>
        </div>
        
       <div class='col-md-12'>
        <br>
        <button name='profile' type='submit' class='btn btn-primary'>Update</button>
       </div>
       

    </form>
    
    <div class="clearfix"> </div>
    <br>
   <!--<h2>Edit Personal Details</h2>
   <?php
        $sql2="select * from users where userid=$userid";
        $res2=mysqli_query($conn,$sql2);
        $r2=mysqli_fetch_assoc($res2);
    ?>
    <br><br>
    <form method="POST" action="updateprofile.php">

        <div class='col-md-6'>
        <label>House Name</label>
        <input type='text' class='form-control' name='housename' value='<?php echo $r2['housename']?>' required>
        </div>
        <div class='col-md-6'>
        <label>Place</label>
        <input type='text' class='form-control' name='place' value='<?php echo $r2['place']?>' required>
        </div>
        <div class='col-md-6'>
        <label>District</label>
        <input type='text' class='form-control' name='district' value='<?php echo $r2['district']?>' required>
        </div>

        <div class='col-md-6'>
        <label>Pincode</label>
        <input type='text' class='form-control' name='pincode' value='<?php echo $r2['pincode']?>' required>
        </div>
        
       <div class='col-md-12'>
        <br>
        <button name='personal' type='submit' class='btn btn-primary'>Update</button>
       </div>
       

    </form>

  <br><br>
    <!-- <h3>House Name:<?php echo $r2['housename']?></h3>
    <h3>Place:<?php echo $r2['place']?></h3>
    <h3>District:<?php echo $r2['district']?></h3>
    <h3>Pincode:<?php echo $r2['pincode']?></h3> -->
<br>





    

</div>
</div>
<?php
include("footer.php");
?>
		
		
