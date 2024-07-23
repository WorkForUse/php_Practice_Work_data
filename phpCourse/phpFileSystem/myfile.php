<?php

// echo "<pre>";
// print_r(glob("*"));
// print_r(glob("css/*"));
// print_r(glob("*.php"));
// print_r(glob("*.txt"));
// print_r(glob("t*"));
// print_r(glob("m*"));
// print_r(glob("ins*"));
// print_r(glob("*est*"));
// print_r(glob("t*ml"));
// print_r(glob("[st]*"));
// print_r(glob("*[st]*"));
// print_r(glob("css/s*"));
// ==============================
// $ar = glob("*");

// foreach ($ar as $filename) {
    //     echo "{$filename} size :" . filesize($filename) . "<br>";
    // }
    // foreach ($ar as $filename) {
        //     echo "{$filename} path :" . realpath($filename) . "<br>";
        // }
        
        // ====================
        // echo "<pre>";
        // print_r(glob("*",GLOB_MARK));
        // print_r(glob("k*",GLOB_NOCHECK));
        // print_r(glob("*",GLOB_ONLYDIR));
        // print_r(glob("{*.html,*.txt}",GLOB_BRACE));
        // print_r(glob("{css/*,js/*}",GLOB_BRACE));
        // echo "</pre>";
?>

<!-- Directory Functions -->

<?php

    // echo getcwd() . "<br>";
    // echo chdir("css");
    // echo getcwd();
    
    // ================
    // $dir = ".";
    // echo "<pre>";
    // print_r(scandir($dir));
    // echo "</pre>";
    // ==============
    // echo getcwd();
    // $dir = ".";
    // echo "<pre>";
    // print_r(scandir($dir));
    // echo "</pre>";
    // ================
    // chdir("css");
    // $dir = ".";
    // echo "<pre>";
    // print_r(scandir($dir));
    // echo "</pre>";
    // ============
    // $dir = "..";
    // echo "<pre>";
    // print_r(scandir($dir));
    // echo "</pre>";
    // =================
    // $dir = "js/";
    // $dir = ".";
    // echo "<pre>";
    // print_r(scandir($dir));
    // print_r(scandir($dir,1));
    // echo "</pre>";

?>

<?php

        // $dir = ".";
        // $dir = "js/";
        // $dir = "..";

        // if(is_dir($dir)){
        //     if($d = opendir($dir)){
        //         while($file = readdir($d)){
        //             echo "filename : " . $file . "<br>";                  
        //         }
        //         closedir($d);             
        //     }
        // }      

?>