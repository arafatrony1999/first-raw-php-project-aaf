<?php
require_once("connect.php");




$input_email = $_REQUEST["email"];
$input_password = $_REQUEST["password"];

$input_auth = md5(sha1($input_email.$input_password));



$select_query = "SELECT * FROM arafatrony WHERE auth='$input_auth' ";
$run_query = mysqli_query($connect,$select_query);
$count = mysqli_num_rows($run_query);

if($run_query==true){
    while($all_data = mysqli_fetch_array($run_query)){
        $user_id = $all_data["id"];
    }
    if($count===1){
        setcookie('currentUser',$input_auth,time()+(7*24*60*60));
        header("location:profile.php?user_id=$user_id");
    }else{
        header("location:login_member.php?wrong");
    }
}




?>