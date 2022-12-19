<?php
require_once("connect.php");
require_once("connect_post.php");
$mail = $_REQUEST["mail"];
$select_query = "SELECT * FROM arafatrony WHERE user_email='$mail' ";
$run_query = mysqli_query($connect,$select_query);
if($run_query==true){
    while($all_data = mysqli_fetch_array($run_query)){
        $id = $all_data["id"];
        echo $id;

        $insert_colom = "ALTER TABLE `arafatrony` ADD 'a' TEXT NOT NULL AFTER `about`";
        $run_colom = mysqli_query($connect ,$insert_colom);

        if($run_colom==true){
            header("location:regestration.php?action_true");
        // }else{
        //     header("location:regestration.php?action_false");
        // }
    }
}
}


?>