<?php
include("header.php");
//session_start();
include("../dbconn.php");
$current_password=$_POST['current_password'];
$userid=$_SESSION['userid'];
$sql="select password from registration where userid='$userid'";
$res=mysqli_query($conn,$sql);
$r=mysqli_fetch_assoc($res);

if($r['password']==$current_password){


?>


<div id="page-wrapper">
    <div class="main-page">
        <h2>Change Password</h2>

        <form method='post' action='updatepassword.php'>
            <br>
            <div class='row'>
            <div class="col-md-6">
                <label>Add New Password</label>
                <input type="password" name="new_password" id="password" required="" class="form-control" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" title="Password must contain at least one digit, one lowercase and one uppercase letter, and be at least 8 characters long.">
            </div>
           
            </div>

            <div class='row'> 
            <div class="col-md-6">
                <button class="btn btn-primary">Submit</button>
            </div>
            </div>
           
           

        </form>


</div>
</div>

<?php
}
else{
?>
<!-- <div id="page-wrapper">
    <div class="main-page">
        <h5>Invalid Password</h5>


</div>
</div> -->

          <script>
             alert(
                 "Invalid Password"
             )
             window.location.href="changepassword.php"
         
             </script>
  
          
<?php
}
?>
<?php
 include("footer.php");
?>
		
		
