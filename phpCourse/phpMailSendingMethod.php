<?php

    // $to = "engamer786@gmail.com";
    // $to = "engamer786@gmail.com,hs@gmail.com";
    // $subject = "Test mail";
    // $message = "Hello! This is a simple email message";
    // $from = "forwork.hs2@gmail.com";
    // $headers = "From : $from";

    // mail($to,$subject,$message,$headers);

    // if(mail($to,$subject,$message,$headers)){
    //     echo "Mail Sent";
    // }else{
    //     echo "Not Mail Sent";
    // }
?>

<?php

    // $to = "engamer786@gmail.com";
    // $to = "engamer786@gmail.com,hs@gmail.com";
    // $subject = "Test mail";
    // $message = "Hello! This is a simple email message";
    // // $from = "forwork.hs2@gmail.com";
    // $headers = [ "MIME-Version: 1.0",
    //     "Content-type: text/plain; charset=utf-8",
    //     "From : forwork.hs2@gmail.com",
    //     "cc : findOne@gmail.com",
    //     "Bcc: abc@gmail.com"
    // ];

    // $headers = implode("\r\n");

    // if(mail($to,$subject,$message,$headers)){
    //     echo "Mail Sent";
    // }else{
    //     echo "Not Mail Sent";
    // }
?>

<!-- ======== -->
<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Email: <input type="text" name="email" autocomplete="off"> <br> <br>
        Subject: <input type="text" name="subject"> <br> <br>
        Message: <br>
        <textarea name="message" cols="40" rows="15"></textarea>
        <input type="submit" name="esubmit">
    </form>
    </body>
</html>

<?php

        if(isset($_POST['esubmit'])){
            $to = "Free2364@gmail.com";
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $from = $_POST['email'];
            $headers = "From : $from";
            
            mail($to,$subject,$message,$headers);
            
            echo "Mail Sent";
        }

?>