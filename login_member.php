<?php
include('nav.php');
if(isset($_COOKIE['currentUser'])){
    header("location:profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <style>
    .reg{
        color: #bebebe;
    }
    .reg a{
        color: #ed5565;
        letter-spacing: 1.5px;
    }
    </style>
</head>
<body>
    <div class="b"></div>

    <div class="form">            
            <?php
                if(isset($_REQUEST["not_isset"])){
                    echo "<mark>"."You need to login first."."</mark>";
                }
            ?>
        <div class="btn-css"><p>Member login</p></div>
        <form method="POST" action="login_core.php">
            <i class="fa fa-user-o" aria-hidden="true"></i><input class="input-css" type="email" placeholder="Email Address" name="email"><br>
            <i class="fa fa-lock" aria-hidden="true"></i><input class="input-css" type="password" placeholder="Password" name="password">
            <input class="btn-css" type="submit" value="Submit">
            <?php
                if(isset($_REQUEST["wrong"])){
                    echo "<mark>"."Email or password is incorrect"."</mark>";
                }
            ?>
        </form>
                
        <div class="reg">Do not have an AAF account? <a href="regestration.php">Register Now</a></div>
    </div>




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