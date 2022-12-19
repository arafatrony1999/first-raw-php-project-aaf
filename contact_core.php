<?php
require_once("connect.php");

if(isset($_REQUEST["full_name"]) && isset($_REQUEST["email"]) && isset($_REQUEST["message"])){
    $full_name = $_REQUEST["full_name"];
    $email = $_REQUEST["email"];
    $message = $_REQUEST["message"];

    $select_query = "INSERT INTO contact (full_name,email,message) VALUES ('$full_name','$email','$message')";
    $run_query = mysqli_query($connect,$select_query);
    if($run_query==true){
        header("location:contact_us.php?action_true");
    }
    else{
        header("location:contact_us.php?action_false");
    }
}else{
    header("location:contact_us.php?nothing");
}



?>