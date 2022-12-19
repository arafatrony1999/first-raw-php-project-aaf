<?php
if(isset($_GET["post_id"])){
$post_id = $_GET["post_id"];

require_once("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
        <input type="text" name="comment" placeholder="Enter your comment" id="">
        <input type="submit" value="Submit">

    </form>



</body>
</html>



<?php


if(isset($_REQUEST["comment"])){

    $comment_desc = $_REQUEST["comment"];
    if($comment_desc==''){
        
    }else{
        $select_query_comment = "INSERT INTO comment (post_id,comment_desc) VALUES ('$post_id','$comment_desc') ";
        $run_query_comment = mysqli_query($connect,$select_query_comment);
        if($run_query_comment==true){
            header("location:comment.php?post_id=$post_id");
        }
    }

}

$select_query = "SELECT * FROM comment WHERE post_id='$post_id' ";
$run_query = mysqli_query($connect,$select_query);
if($run_query==true){
    while($all_data = mysqli_fetch_array($run_query)){
        $comment_id = $all_data['comment_id'];
        $comment_post_desc = $all_data['comment_desc'];
        $comment_post_id = $all_data['post_id'];
        $date = $all_data['date'];

        echo $comment_post_desc;
        echo '<br />';

?>




<?php
    }
}
}
?>

<a href="profile.php">Profile</a>

    <script type="text/javascript">
        const currentLocation = location.href;
        const menuItem = document.querySelectorAll('a');
        const menuLength = menuItem.length
        for (let i = 0; i<menuLength; i++){
            if(menuItem[i].href === currentLocation){
                menuItem[i].className = "acitve-nav"
            }
        }
    </script>
