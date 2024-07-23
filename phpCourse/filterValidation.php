<?php

    // $var = 767;
    // quotes ko bhi true dekhaega
    // $var = '767';
    // boolean true ko bhi true dekhaega
    // $var = true;

    // var_dump( filter_var($var,FILTER_VALIDATE_INT) );

    // if(filter_var($var,FILTER_VALIDATE_INT)){
    //     echo "<br> $var is Integer";
    // }else{
    //     echo "<br> $var is not an Integer";
    // }

?>

<?php

// $var = 0;

// var_dump( filter_var($var,FILTER_VALIDATE_INT) );

// if(filter_var($var,FILTER_VALIDATE_INT) || filter_var($var,FILTER_VALIDATE_INT) == 0){
//     echo "<br> $var is Integer";
// }else{
//     echo "<br> $var is not an Integer";
// }

?>

<?php

// Exercise with options uskay saath aap range bhi define krsaktay hai

// $var = 26;
// $var = 21.54;
// also float accept | han true ko float nhi accept krega
// $var = '21.54';

// var_dump( filter_var($var,FILTER_VALIDATE_INT) );
// var_dump( filter_var($var,FILTER_VALIDATE_FLOAT) );

// if(filter_var($var,FILTER_VALIDATE_INT, array("options" => array("min_range"=>20,"max_range"=>30)))){
//     $options = array(
//         "options" => array(
//             "min_range"=>20,
//             "max_range"=>30
//         )
//         );
// if(filter_var($var,FILTER_VALIDATE_FLOAT, $options)){
//     echo "<br> $var is Float";
// }else{
//     echo "<br> $var is not an Float";
// }

?>

<?php

// $var = "yes";
// $var = "no";
// $var = true;
// $var = false;
// $var = 0;
// $var = 1;
// $var = 'off';
// $var = 'on';
// $var = 'owww';
// $var = true;

// var_dump( filter_var($var,FILTER_VALIDATE_BOOLEAN) );
// var_dump( filter_var($var,FILTER_VALIDATE_BOOLEAN), FILTER_NULL_ON_FAILURE );

// if(filter_var($var,FILTER_VALIDATE_BOOLEAN)){
//     echo "<br> $var is Boolean";
// }else{
//     echo "<br> $var is not an Boolean";
// } 

?>

<?php

    // $var = "545";
    // $var = "hello@gmail.com";

    // var_dump( filter_var($var,FILTER_VALIDATE_EMAIL));

    // if(filter_var($var,FILTER_VALIDATE_EMAIL)){
    //     echo "<br> $var is valid email";
    // }else{
    //     echo "<br> $var is not an valid email";
    // } 
?>

<?php

// $var = "545";
// $var = "https://www.youtube.com/watch?v=Pb3tRs8u2Rw&list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&index=167";
// $var = "192.168.10.1";
$var = "00-B0-D0-63-C2-26";

// var_dump( filter_var($var,FILTER_VALIDATE_EMAIL));

// if(filter_var($var,FILTER_VALIDATE_URL)){
// if(filter_var($var,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)){
// if(filter_var($var,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)){
// if(filter_var($var,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)){
// if(filter_var($var,FILTER_VALIDATE_IP)){
if(filter_var($var,FILTER_VALIDATE_MAC)){
    echo "<br> $var is valid Mac address (Media access control)";
}else{
    echo "<br> $var is not an valid Mac address";
} 

?>