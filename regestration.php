<?php include('nav.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="regestration.css">
</head>
<body>
    <div class="container-css">
    <?php
    if(isset($_REQUEST['action_true'])){
        echo "<a style='color:red' href='index.php'>"."Click"."</a>";
    }
    if(isset($_REQUEST['action_false'])){
        echo "<mark>"."Something wrong.Try again using different email or phone number"."</mark>";
    }
    ?>


        <p><h1>AAF Regestration</h1></p>
        <div class="empty"></div>
        <form action="get.php" method="POST" enctype="multipart/form-data">
            <input class="name" type="text" name="fname" placeholder="First Name" required>
            <input class="name" type="text" name="lname" placeholder="Last Name" required>

            <div class="gender">
                <b>Gender :</b>
                <select class="select" name="gender" id="">
                    <option value="Select gender">Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            
            <div class="country">
                <input list="country" placeholder="Select Country" required>
                <input type="number" name="p_number" placeholder="Enter your Phone Number" required>
                    <datalist id="country">
                        <option name="country" value="Bangladesh (+880)"></option>
                    </datalist>
                
            </div>
            
            <input class="b" type="email" name="user_email" placeholder="Email Address" required>
            <input class="name" type="password" name="user_pwd" placeholder="Password" required>
            <input class="name" type="password" name="user_pwd2" placeholder="Confirm Password" required>
            <?php
            if(isset($_REQUEST["not_matched"])){
                echo "<mark>"."Password does not matched"."</mark>";
            }
            ?>
            <input class="pic" type="file" name="p_image">
            <div class="empty"></div>
            <input class="c" type="submit" value="Submit">
            <input class="c" type="reset" value="Reset">
        </form>
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