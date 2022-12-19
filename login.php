<?php include('nav.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <?php
    if(isset($_COOKIE['currentUserAdmin'])){
        $x = md5('admin_arafat2580');
        header("location:about_us.php?action=$x");
    }
    ?>
    <div class="form">
        <div class="btn-css"><p>Admin Login</p></div>
        <form method="POST" action="profile_core.php">
            <i class="fa fa-user-o" aria-hidden="true"></i><input class="input-css" type="text" placeholder="Username" name="username"><br>
            <i class="fa fa-lock" aria-hidden="true"></i><input class="input-css" type="password" placeholder="Password" name="password">
            <input class="btn-css" type="submit" value="Submit">
        </form>
        <?php
        if(isset($_REQUEST["info"]))
            if("info=wrong"){
                echo "<mark>"."Username or password is incorrect."."</mark>";
            }
        
        ?>
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