<?php 

session_start();
// print_r($_SESSION);

?>

<html>
    <body>
        <?php 
            if(isset($_SESSION["favcolor"])){
                echo "Favorite color : " . $_SESSION["favcolor"];
            }
            // echo "favorite color : " . $_SESSION["favcolor"];
        ?> 
    </body>
</html>