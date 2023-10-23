<?php
session_start();
include("../dbconn.php");
$userid=$_SESSION["userid"];
$eventid=$_GET["eventid"];

$sql2="select * from event_participate where eventid=$eventid and userid=$userid";
$res=mysqli_query($conn,$sql2);
if(mysqli_num_rows($res)>0){
    ?>
          <script>
             alert(
                 "You are already participated in the event"
             )
             window.location.href="index.php"
         
             </script>
  
          <?php
}
else{
    $sql="insert into event_participate(eventid,userid)values($eventid,$userid)";
    if(mysqli_query($conn,$sql)){
        ?>
        <script>
           alert(
               "Participation request send"
           )
           window.location.href="index.php"
       
           </script>

        <?php
    }
}




?>