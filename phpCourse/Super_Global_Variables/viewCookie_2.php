<?php echo "Cookie Value : " . $_COOKIE["user"]; 

setcookie("user","",time() - (86400 * 30), "/");

?>
<!-- agar aap cookie ko delete krna chahtay hotu yeah method use kre --> 👆