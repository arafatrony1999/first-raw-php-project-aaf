<?php
include('nav.php');
if(isset($_COOKIE['currentUser'])){
$aaf_id = $_REQUEST['aaf_id'];
$query = "SELECT id,fname,lname,user_email,p_number,gender,p_image FROM arafatrony WHERE id='$aaf_id' ";
$run_query = mysqli_query($connect,$query);
if($run_query == true){
    while($all_data = mysqli_fetch_array($run_query)){
        $member_id = $all_data["id"];
        $member_fname = $all_data["fname"];
        $member_lname = $all_data["lname"];
        $member_user_email = $all_data["user_email"];
        $member_p_number = $all_data["p_number"];
        $member_p_image = $all_data["p_image"];
    }
}
    // $alter = "ALTER TABLE `arafatrony` ADD `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `about` ";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
    <div class="b"></div>

    <?php if(isset($_COOKIE['currentUser'])){ ?>

        <div class="container-css">
            <!-- Div for cover photo -->
            <div class="c-image">
                <img src="DSC_0397.jpg" alt="">
            </div>
            <!-- Div for profile image -->
            <div class="p-image">
                <img src="images/<?php if($p_image==''){ }else{ echo $member_p_image; } ?>">
            </div>
            <!-- Div for user name -->
            <div class="name">
                <span> <?php echo $member_fname.' '.$member_lname; ?> </span><span>(Nickname)</span>
            </div>
            <!-- Div for post something -->
        </div>

        <a href="message.php?user_id=<?php echo $member_id; ?>#scroll">Message</a>

        <?php

            if($aaf_id==$id){ ?>
                    <div class="container-css">
                        <form action="post.php" method="POST" enctype="multipart/form-data">
                            <div class="post-something">
                                <img src="images/<?php echo $p_image; ?>" alt="">
                                <textarea name="post_something" placeholder="Post something"></textarea>
                                <input type="file" name="post_img">
                            <input type="submit" value="Post">
                            </div>
                        </form>
                    </div>
        <?php
            }
        ?>

        <?php
            $post_query = "SELECT * FROM post WHERE user_id='$member_id' ";
            $run_post_query = mysqli_query($connect,$post_query);
            if($run_post_query == true){
                while($all_post_data = mysqli_fetch_array($run_post_query)){
                    $post_id = $all_post_data["post_id"];
                    $post_desc = $all_post_data["post_desc"];
                    $date = $all_post_data["date"];
                    $post_img = $all_post_data["post_img"];
        ?>

        <div class="post-container">
            <div class="post">
                <img src="images/<?php echo $member_p_image; ?>" alt="">
                <span><b><?php echo $member_fname.' '.$member_lname; ?></b> <br><?php echo $date; ?></span>
            </div>
            <p><?php echo $post_desc; ?></p>

            <?php
                if($post_img=='blank'){
                }else{?>
                    <div class="post-img">
                        <img src="post_image/<?php echo $post_img ?>" alt="">
                    </div>
                <?php
                }
            ?>

            
            <div class="comment-btn">
                <a href="comment.php?post_id=<?php echo $post_id; ?>">Comment</a>
            </div>
            
        </div>

        <?php   
                }
            }
        ?>
        

    <?php 
        }
    }else{
        header('location:login_member.php?not_isset');
    }
    ?>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.menu-toggle').click(function(){
                $('nav').toggleClass('active')
            })
        })
        
        $(document).ready(function(){
            $('.menu').click(function(){
                $('.toggle').toggleClass('active1')
            })
        })

        $(document).ready(function(){
            $('.a').click(function(){
                $('.toggle-max').toggleClass('active2')
            })
        })
        
    </script>
</body>
</html>