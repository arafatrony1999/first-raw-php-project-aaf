<?php

require_once("connect.php");

// if(isset($_REQUEST["post_something"])){

$post_something = $_REQUEST["post_something"];

if($post_something==''){
        
    header("location:profile.php?nothing");


}else{
    
    $select_Cookie = $_COOKIE['currentUser'];
    $query = "SELECT id,fname,lname,user_email,p_number,gender,p_image FROM arafatrony WHERE auth='$select_Cookie' ";
    $run_query = mysqli_query($connect,$query);
    if($run_query==true){
        while($all_data = mysqli_fetch_array($run_query)){
            $user_id = $all_data["id"];
            $fname = $all_data["fname"];
            $lname = $all_data["lname"];
            $p_image = $all_data["p_image"];
        }
    }else{

    }


        $post_image = $_FILES["post_img"];
        $post_img_name = $post_image["name"];


    if($post_img_name==''){
        $blank = "blank";
        $insert_query1 = "INSERT INTO post (user_id,post_img,post_desc) VALUES ('$user_id','$blank','$post_something')";
        $run_query1 = mysqli_query($connect,$insert_query1);

            if($run_query1==true){
                header("location:profile.php?action_true");
            }else{
                header("location:regestration.php?action_false");
            }

            
    }else{

        $img_name = 'AAF_'.'post_'.uniqid().'.jpg';
        $post_tmp_name = $post_image['tmp_name'];
        move_uploaded_file($post_tmp_name,"post_image/$img_name");


        $insert_query = "INSERT INTO post (user_id,post_img,post_desc) VALUES ('$user_id','$img_name','$post_something')";
        $run_query = mysqli_query($connect,$insert_query);

        if($run_query==true){
            header("location:profile.php?action_true");
        }else{
            header("location:regestration.php?action_false");
        }
    }

}



?>

    

