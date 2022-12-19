<?php include('nav.php'); ?>
?>

<?php
if(isset($_REQUEST["data"])){
    echo "<center>"."<mark>"."You have successfully logged our from admin panel"."</mark>"."</center>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAF Home</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-css">
        <div class="profile-image"> 
            <img src="c.jpg">
        </div>

        <div class="title-css">
            <h1>Alor Anirban Foundation</h1>
        </div>

        <form method="POST" action="login_member.php">
            <div class="container-form">
                <?php if(isset($_COOKIE['currentUser'])){
                    echo "<input type='submit' value='Visit Profile' ";
                }else{
                    echo "<input type='submit' value='Join AAF' ";
                }
                ?>
            </div>
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