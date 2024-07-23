<?php
    if(isset($_FILES['image'])){
        // echo "<pre>";
        //     print_r($_FILES);
        // echo "</pre>";
        
        // uploading on server method
        
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];

        if(move_uploaded_file($file_tmp,"../../phpCourse/fileUpload/".$file_name)){
            echo "Successfully Uploaded";
        }else{
            echo "Could not Upload File";
        }
        
    }


?>

<html>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="image" /> <br><br>
            <input type="submit">
        </form>
    </body>
</html>