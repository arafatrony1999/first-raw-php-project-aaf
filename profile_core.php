
        <?php
        require_once("connect.php");
            
        
            $username = $_POST["username"];
            $password = $_POST["password"];
            $x = md5($password);   
            if($username=="Arafat" and $password=="admin_arafat2580"){
                header("location:about_us.php?action=$x");
            }
            else{
    
                header("location:login.php?info=wrong");
    
            }  

        ?>
