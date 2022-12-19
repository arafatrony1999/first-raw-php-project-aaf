<?php
$username = "Arafat";
setcookie('currentUserAdmin',$input_auth,time()-(10*24*60*60));
header("location:index.php?data");
?>