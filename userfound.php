<?php

require("dbconn.php");
$email=$_POST["email"];

$sql="select email from registration where email='$email'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
    echo "1";
}
else{

    echo "0";
}

?>