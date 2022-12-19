<?php
$user_id = $_REQUEST['user_id'];
include('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="message.css">
</head>
<body>



    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST" class="fixed">
        <textarea name="input_message" placeholder="Type your message....."></textarea>
        <input type="submit" value="Send">
    </form>


<?php
if(isset($_REQUEST["input_message"])){
    $message_desc = $_REQUEST["input_message"];
    if($message_desc==''){
        
    }else{
        $select_query_message = "INSERT INTO messages (user_id,messages,other_member_id) VALUES ('$id','$message_desc','$user_id') ";
        $run_query_message = mysqli_query($connect,$select_query_message);
        if($run_query_message==true){
            header("location:message.php?user_id=$user_id#scroll");
        }else{

        }
    }
}
?>

    <div class="message-container">
        <div class="leftright">
            <p>aaf</p>
        </div>

<?php

$select_query1 = "SELECT id,fname,lname,p_image FROM arafatrony WHERE id='$user_id' ";
$run_query1 = mysqli_query($connect,$select_query1);
if($run_query1 == true){
    while($member_data_arafatrony = mysqli_fetch_array($run_query1)){
        $member_id = $member_data_arafatrony['id'];
        $member_fname = $member_data_arafatrony['fname'];
        $member_lname = $member_data_arafatrony['lname'];
        $member_p_image = $member_data_arafatrony['p_image'];

        
    }
}

$select_query2 = "SELECT * FROM messages WHERE (user_id='$id' AND other_member_id='$user_id') OR (user_id='$user_id' AND other_member_id='$id') ";
$run_query2 = mysqli_query($connect,$select_query2);
if($run_query2 == true){
    while($all_data_message = mysqli_fetch_array($run_query2)){


        $message_user_id = $all_data_message['user_id'];


        $user_message_id = $all_data_message['message_id'];
        $message = $all_data_message['messages'];


        if($id == $message_user_id){ ?>
        
            <div class="right">
                <p><?php echo $message; ?></p>
            </div>
        <?php
        }else{ ?>

            <div class="left">
                <img src="images/<?php echo $member_p_image; ?>" alt="">
                <p><?php echo $message; ?></p>
            </div>
        <?php
        }
    }
}



?>
        <div id="scroll"></div>
        <div class="height">
            <b><a href="member_profile.php?aaf_id=<?php echo $user_id;?>"><?php echo $member_fname.' '.$member_lname; ?></a></b>
        </div>
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

<!-- null !== expression -->