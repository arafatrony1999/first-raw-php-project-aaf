<?php
require_once("connect.php");
if(isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset($_REQUEST["user_email"]) && isset($_REQUEST["user_pwd"]) && isset($_REQUEST["user_pwd2"]) && isset($_REQUEST["gender"]) && isset($_REQUEST["p_number"])){
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $user_email = $_REQUEST["user_email"];
    $user_pwd = $_REQUEST["user_pwd"];
    $user_pwd2 = $_REQUEST["user_pwd2"];
    $gender = $_REQUEST["gender"];
    $p_number = $_REQUEST["p_number"];
    
        if($user_pwd==$user_pwd2){


            $user_enc_pwd = md5(sha1($user_pwd));
            $auth = md5(sha1($user_email.$user_pwd));

            $image = $_FILES["p_image"];
        
            $img_name = $image['name'];
            if($img_name=''){
                $name = 'AAF_'.uniqid().'.jpg';
                $tmp_name = $image['tmp_name'];
                move_uploaded_file($tmp_name,"images/$name");
                $p_image = "<img src='images/$name' />";

                    $insert_query = "INSERT INTO arafatrony (fname,lname,user_email,user_pwd,auth,gender,p_number,p_image) VALUES ('$fname','$lname','$user_email','$user_enc_pwd','$auth','$gender','$p_number','$name')";
                    $run_query = mysqli_query($connect ,$insert_query);

                    if($run_query==true){
                        header("location:regestration.php?action_true");
                    }else{
                        header("location:regestration.php?action_false");
                    }
            }else{
                $a = "c.png";
                $b = "female-avatar.png";
                if($gender=='Male'){
                    $insert_query = "INSERT INTO arafatrony (fname,lname,user_email,user_pwd,auth,gender,p_number,p_image) VALUES ('$fname','$lname','$user_email','$user_enc_pwd','$auth','$gender','$p_number','$a')";
                    $run_query = mysqli_query($connect ,$insert_query);

                    if($run_query==true){
                        header("location:regestration.php?action_true");
                    }else{
                        header("location:regestration.php?action_false");
                    }
                }elseif($gender=='Female'){
                    $insert_query = "INSERT INTO arafatrony (fname,lname,user_email,user_pwd,auth,gender,p_number,p_image) VALUES ('$fname','$lname','$user_email','$user_enc_pwd','$auth','$gender','$p_number','$b')";
                    $run_query = mysqli_query($connect ,$insert_query);

                    if($run_query==true){
                        header("location:regestration.php?action_true");
                    }else{
                        header("location:regestration.php?action_false");
                    }
                }
            }
        }else{
            header("location:regestration.php?not_matched");
        }

}
?>