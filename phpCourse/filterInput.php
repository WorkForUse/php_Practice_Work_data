<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
       <!-- Email : <input type="text" name="email" autocomplete="off"> -->
       Marks : <input type="text" name="marks" autocomplete="off">

       <input type="submit" name="submit" value="Submit">
    </form> <br>

    <?php
        if(isset($_REQUEST['submit'])){
            // echo filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);
            // if(filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL)){
                $options = array(
                    "options"=> array(
                        "min_range" => 1,
                        "max_range" => 100
                    )
                );
            if(filter_input(INPUT_POST,"marks",FILTER_VALIDATE_INT,$options)){
                // echo "Email is Valid";
                echo "Marks is Valid";
            }else{
                // echo "Email is not Valid";
                echo "Marks is not Valid";
            }
        }
    ?>
</body>
</html>