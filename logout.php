<?php
setcookie('currentUser',$user_email,time()-(10*24*60*60));
header("location:index.php?data");
?>