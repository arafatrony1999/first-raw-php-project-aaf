<?php
include('nav.php');
$username = "Arafat";
setcookie('currentUserAdmin',$username,time()+(7*24*60*60));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="about_us.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
        if(isset($_REQUEST["deleted"])){
            echo "<mark>"."Data has been deleted"."</mark>";
            echo "<br>";
        }
?>
</div>
        
        <?php
        if(isset($_REQUEST["action"])){
            $x = md5("admin_arafat2580");
            if("action=$x"){
                require_once("connect.php");

                $data = "SELECT * FROM arafatrony";
                $run_data = mysqli_query($connect,$data);

                if($run_data==true){
                    $serial = 1;
                    while($all_data = mysqli_fetch_array($run_data)){?>
            


            


            <div class="card">
                <h4><?php echo $serial;$serial++; ?></h4>
                
                <img src="images/<?php echo $all_data["p_image"]; ?>" alt="">
                <div class="details">
                
                    <h1><?php echo $all_data["fname"].' '.$all_data["lname"]?></h1>
                    ID : <?php echo $all_data["id"];?><br>
                    Email : <?php echo $all_data["user_email"];?><br>
                    Gender : <?php echo $all_data["gender"];?><br>
                    Number : <?php echo $all_data["p_number"];?><br>
                    <a href="delete_core.php?id=<?php echo $all_data["id"]; ?>">Delete</a>
                </div>
            </div>
        <?php
        }}
        }
    }
    ?>
    
    <a href="logout_core.php">Logout</a>
 
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