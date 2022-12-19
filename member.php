<?php
include('nav.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="member.css">
</head>
<body>

    <div class="padding"></div>

<?php
$collect_member = "SELECT id,fname,lname,user_email,p_number,gender,p_image FROM arafatrony";
$run_collect_member = mysqli_query($connect,$collect_member);
if($run_collect_member==true){
    while($members = mysqli_fetch_array($run_collect_member)){?>

    <div class="post-container">
        <div class="post">
            <span><b>AAF ID-<?php echo $members['id']; ?></b></span>
            <span><a href="member_profile.php?aaf_id=<?php echo $members['id']; ?> "><?php echo $members['fname'].' '.$members['lname']; ?></a></span>
            <span><a href="message.php?user_id=<?php echo $members['id'].'#scroll'; ?>">Message</a></span>
            <img src="images/<?php echo $members['p_image']; ?>" alt="No pictuer found">
        </div>
    </div>

<?php
    }
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
        const currentLocation=location.href;
        const menuItem=document.querySelectorAll('a');
        const menuLength=menuItem.length
        for (let i = 0; i<menuLength; i++){
            if(menuItem[i].href===currentLocation){
                menuItem[i].className="acitve-nav"
            }
        }
        
    </script>
</body>
</html>