<?php
require_once('connect.php');
if(isset($_COOKIE['currentUser'])){
    $select_Cookie = $_COOKIE['currentUser'];
    $query_nav = "SELECT id,fname,lname,user_email,p_number,gender,p_image FROM arafatrony WHERE auth='$select_Cookie' ";
    $run_query_nav = mysqli_query($connect,$query_nav);
    if($run_query_nav == true){
        while($all_data_nav = mysqli_fetch_array($run_query_nav)){
            $id = $all_data_nav["id"];
            $fname = $all_data_nav["fname"];
            $lname = $all_data_nav["lname"];
            $user_email = $all_data_nav["user_email"];
            $p_number = $all_data_nav["p_number"];
            $p_image = $all_data_nav["p_image"];
        }
    }else{

    }
}else{

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="title"><img src="c.jpg" alt=""></div>
        <div class="logo">AAF</div>
        <nav>
            <ul>
                <?php if(isset($_COOKIE['currentUser'])){ ?>
                <li class="menu"><a href="#">Welcome <br><?php echo $fname.' '.$lname; ?><span><img src="images/<?php echo $p_image; ?>" alt=""></span></a></li>
                <?php }else{ ?>
                <li class="menu"><a href="#">Welcome<br>to<br> Alor Anirban Foundation<span><img src="c.jpg" alt=""></span></a></li>
                <?php } ?>
                <li><a class="active-index" href="index.php">Home</a></li>
                <li><a class="acitve-about" href="about_us.php">About Us</a></li>
                <li><a class="acitve-contact" href="contact_us.php">Contact Us</a></li>
                <li><a class="acitve-message" href="message.php">Messeges</a></li>
                <li><a class="acitve-member" href="member.php">Members</a></li>
                <?php if(isset($_COOKIE['currentUser'])){ ?>
                <li><div class="a"><span><img src="images/<?php echo $p_image; ?>" alt=""></span><?php echo $fname.' '.$lname; ?></div></li>
                <?php }else{ ?>
                <li><div class="a">Join AAF</div></li>
                <?php } ?>
            </ul>

                <?php if(isset($_COOKIE['currentUser'])){?>
                    <div class="toggle">
                        <ol>
                            <li><a href="profile.php">View Profile</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ol>
                    </div>
                <?php }else{ ?>
                    <div class="toggle">
                        <ol>
                            <li><a href="login_member.php">Login</a></li>
                            <li><a href="regestration.php">Regestration</a></li>
                        </ol>
                    </div>
                <?php } ?>


                <?php if(isset($_COOKIE['currentUser'])){?>
                    <div class="toggle-max">
                        <ol>
                            <li><a href="profile.php">View Profile</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ol>
                    </div>
                <?php }else{ ?>
                    <div class="toggle-max">
                        <ol>
                            <li><a href="login_member.php">Login</a></li>
                            <li><a href="regestration.php">Regestration</a></li>
                        </ol>
                    </div>
                <?php } ?>
        </nav>

        <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>

    </header>



</body>
</html>