<?php



require_once("connect.php");
$getID = $_REQUEST["id"];
$delete_data = "DELETE FROM arafatrony WHERE id=$getID";
$run_delete = mysqli_query($connect,$delete_data);
if($run_delete==true){
    header("location:about_us.php?deleted");
}





?>