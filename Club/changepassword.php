<?php
include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">
        <h2>Change Password</h2>

        <form method='post' action='passwordcheck.php'>
            <br>
            <div class='row'>
            <div class="col-md-6">
                <label>Add Current Password</label>
                <input type="password" name="current_password" required="" class="form-control">
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
include("footer.php");
?>