<?php

    // $string = "PHP is the web scripting language of choice";
    // $string = "PHP is the web scripting language of choice 113";
    // $string = "PHP is the web scripting language of choice 113 555";

    // $exp = preg_match("/PHP/",$string);
    // $exp = preg_match("/php/i",$string);
    // $exp = preg_match_all("/php/i",$string,$arr);
    // $exp = preg_match_all("/php|language/i",$string,$arr);
    // $exp = preg_match_all("/php|language|is/i",$string,$arr);
    // $exp = preg_match_all("/e|y|b/i",$string,$arr);
    // $exp = preg_match_all("/113/i",$string,$arr);
    // $exp = preg_match_all("/113|555|a/i",$string,$arr);
    // $exp = preg_match_all("/[w]/i",$string,$arr);
    // $exp = preg_match_all("/[wc]/i",$string,$arr);
    // $exp = preg_match_all("/[wcf]/i",$string,$arr);
    // $exp = preg_match_all("/[^wcf]/i",$string,$arr);
    // $exp = preg_match_all("/[a-g]/i",$string,$arr);
    // $exp = preg_match_all("/[g-z]/i",$string,$arr);
    // $exp = preg_match_all("/[G-Z]/",$string,$arr);
    // $exp = preg_match_all("/[g-zG-Z]/",$string,$arr);
    // $exp = preg_match_all("/[0-9]/",$string,$arr);
    // $exp = preg_match_all("/[0-3]/",$string,$arr);
    // $exp = preg_match_all("/[^0-3]/",$string,$arr);
    // $exp = preg_match_all("/[^a-j]/i",$string,$arr);
    // $exp = preg_match_all("/[a-j3-7]/i",$string,$arr);

    // if($exp){
    //     echo " A match was found ";
    // }else{
    //     echo " A match was not found ";
    // }

    // echo "<pre>";
    //     print_r($arr);
    // echo "</pre>";

    // ==========
    // echo $arr[0][1];

?>

<?php

// $string = "PHP is the web scripting PHP language of choice";
// $string = "<h1>PHP is the web scripting PHP language of choice</h1>";
// $string = "April 15, 2020";
// $string = "{startDate} = 1999-5-10";

// $pattern = "/PHP/i";
/*$pattern = "/<.+?>/i";*/
// $pattern = array("/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/");
// $pattern = array("/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/","/^\s*{(\w+)}\s*=/");

// $replacement = "Javascript";
// $replacement = "";
// $replacement = "$1 25, $3";
// $replacement = array("$4/$3/$1$2");
// $replacement = array("$4/$3/$1$2","$1 =");

// echo preg_replace($pattern,$replacement,$string);

// ================================
// echo preg_quote("$5.99");
// echo preg_quote("http://");
// echo preg_quote("http://","/");
// -------
// $string = "PHP is the web scripting PHP language of choice";
// $string = "https://wwwyahoobaba.net/folder/file.php";
$string = "php hypertext language programming";

// $split = preg_split("/[\s]+/",$string);
// $split = preg_split("/[\s]+/",$string,3);
// $split = preg_split("/(web|of)/",$string);
// $split = preg_split("/\//",$string);
// $split = preg_split("/\//",$string,-1,PREG_SPLIT_NO_EMPTY);
// $split = preg_split("/\/\//",$string);
$split = preg_split("/ /",$string,-1,PREG_SPLIT_OFFSET_CAPTURE);

echo "<pre>";
print_r($split);
echo "</pre>";

?>