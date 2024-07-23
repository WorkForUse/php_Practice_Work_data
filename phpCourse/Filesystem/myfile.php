<?php

    // $file = "readme.txt";
    // // echo readfile("readme.txt");
    // if(file_exists($file)){
    //     echo readfile("readme.txt");
        
    // }else{
    //     echo "File does not exist";
    // }

?>

<?php

    // $file = "readme.txt";
    // if(file_exists($file)){
    //     echo readfile("readme.txt");

    //     copy($file,"newfile.txt");
        
    // }else{
    //     echo "File does not exist";
    // }

?>

<?php

    // $file = "readme.txt";
    // if(file_exists($file)){

    //     rename("newfile.txt","oldfile.txt");
        
    // }else{
    //     echo "File does not exist";
    // }

?>

<?php

    // $file = "oldfile.txt";
    // $file = "readme.txt";
    // if(file_exists($file)){

    //     unlink("oldfile.txt");
        
    // }else{
    //     echo "File does not exist";
    // }

?>

<?php

    // $file = "readme.txt";
    // if(file_exists($file)){

    //     delete("oldfile.txt");
        
    // }else{
    //     echo "File does not exist";
    // }

?>

<?php

        // $file = "readme.txt";
        // mkdir("textfiles");

        // $file = "readme.txt";

        // if(!file_exists("textfiles")){
        // mkdir("textfiles");
        // }else{
        // echo "File already exists";
        // }

?>

<?php

        // $file = "readme.txt";

        // if(file_exists("textfiles")){
        // rmdir("textfiles");
        // }else{
        // echo "Folder does not exists";
        // }

?>

<?php

        // $file = "readme.txt";

        // echo filesize($file);

?>

<?php

        // $file = "readme.txt";
        // =================
        // mkdir("test");
        // echo filetype($file);
        // echo filetype("test");
        // echo realpath("$file");
        // =================

        // echo "<pre>";
        // print_r( pathinfo($file) );
        // echo "</pre>";

        // ==================

        // $file = "readme.txt";

        // $path = realpath($file);
        // echo "<pre>";
        // -----
        // print_r( pathinfo($path) );
        // print_r( pathinfo($path,PATHINFO_DIRNAME) );
        // print_r( pathinfo($path,PATHINFO_BASENAME) );
        // print_r( pathinfo($path,PATHINFO_EXTENSION) );
        // ---
        // print_r( pathinfo($path,PATHINFO_FILENAME) );
        // echo "</pre>";

?>

<?php

            // $file = "readme.txt";
            // $path = realpath($file);

            // echo basename($path)
            // echo basename($path,".txt");

?>

<?php

    // $file = "readme.txt";
    // $path = realpath($file);
//    echo $path = realpath($file) . "<br>";
    // echo dirname($path);
    // echo dirname($path,2);
    // echo dirname($path);

?>

<!-- Part 2 With SOme Advanced Functions -->
<!-- =================================== -->

<?php

    //   $file =  fopen("readme.txt","r");

    //   echo fread($file,100);
    //   echo fread($file,10);
    //   echo fread($file,filesize('readme.txt'));
        // echo fgets($file);
        // echo ftell($file);
        // echo "<br>" . fgets($file);
        // echo ftell($file);
        
        // fseek($file,15);
        // echo "<br>" . fgets($file);

?>

<?php

            // $file = fopen("readme.txt","r");

            // echo fgets($file);
            // echo ftell($file);

            // rewind($file);
            // echo "<br><br>" . fgets($file);

?>

<?php

            // $file = fopen("readme.txt","r");

            // echo "<ul>";
            // while(! feof($file)){
            //     $line = fgets($file);
            //     echo "<li>".$line."</li>";
            // }
            // echo "</ul>";


?>

<?php

    // $file = fopen("readme.txt","r");
    // echo fgetc($file);
    // echo "<pre>";
    // print_r(file("readme.txt"));
    // echo "<pre>";
    
    ?>

<?php

// $file = fopen("readme.txt","r+");
// $file = fopen("readme.txt","w+");
// $file = fopen("readme.txt","a+");

// fwrite($file,"Here is new line");
// fwrite($file,"\nHere is new line aasdsadasdsadasd");
// fputs($file,"\nHere is new line aasdsadasdsadasd");

// ftruncate($file,100);
// ftruncate($file,50);

// ==========
// fclose($file);

?>

<!-- File System Kay Iss Functions -->
<!-- ============================= -->

<?php

// if(is_file('test.txt')){
// if(is_file('test')){
// if(is_dir('test')){
// if(is_writable('test.txt')){
// if(is_readable('test.txt')){
// if(is_executable('test.txt')){
    // print "Yes";
    // print "Yes Folder Hai";
    // print "Yes Writable Hai";
    // print "Yes Readable Hai";
    // print "Yes Executable Hai";
// }else{
    // print "No";
    // print "Ni hai Executable";
// }

?>

<!-- File Permission Methods Chmod & Fileperms -->

<?php

    // echo fileperms("readme.txt");
    // octal form method | pehlay kay do 10 hi rehtay hai
    // echo decoct(fileperms("readme.txt"));
    // echo substr(decoct(fileperms("readme.txt")),2);
    // ========================================
    // ab jo work hai wo shayd window may work na kre
    // ========================================
    // chmod("readme.txt",0600);
    // chmod("readme.txt",0644);
    // chmod("readme.txt",0400);

    // if(is_writable("readme.txt")){
    // if(is_readable("readme.txt")){
    // if(is_executable("readme.txt")){
        // echo "Yes it is writable";
        // echo "Yes it is readble";
        // echo "Yes it is executable";
    // }else{
    //     echo "Yes it is not executable";
    // }

?>

<?php

    // Write in the File ===============>
    // echo file_put_contents("readme.txt","This is testing text");
    // echo file_put_contents("readme.txt","This is testing text 2",FILE_APPEND);
    // echo file_put_contents("readme.txt","This is testing text 2 Apended",FILE_APPEND | LOCK_EX);

?>

<!-- ===================Read From The File Methods=================== -->

<?php

        // echo file_get_contents("readme.txt");
        // with optional parameters =================
        // echo file_get_contents("readme.txt",FALSE,NULL,0,50);
        // echo file_get_contents("readme.txt",FALSE,NULL,0,150);
        // echo file_get_contents("readme.txt",FALSE,NULL,20,150);
        echo file_get_contents("readme.txt",FALSE,NULL,20);

?>