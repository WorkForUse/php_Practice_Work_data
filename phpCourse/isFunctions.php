<?php

    // $var = 850;
    // echo is_int($var) . "<br>";
    // echo is_integer($var) . "<br>";
    // echo is_long($var) . "<br>";

    // both same work==========================
    // var_dump(is_int($var));
    // var_dump(is_integer($var));
    // var_dump(is_long($var));

    // hum issay bassically if kay saath use krtay hai
    // if(is_int($var)){
    // if(is_integer($var)){
    // if(is_long($var)){
    //     echo "<br> $var is Integer";
    // }else{
    //     echo "<br> $var is not an Integer";
    // }

?>

<?php

    // $var = 850;
    // $var = 850.54;
    // echo is_float($var) . "<br>";
    // echo is_double($var) . "<br>";
    // echo is_real($var) . "<br>";
    // echo is_real($var) . "<br>";

    // var_dump(is_float($var));
    // var_dump(is_double($var));
    // var_dump(is_real($var));
    // var_dump(is_real($var));

    // hum issay bassically if kay saath use krtay hai
    // if(is_float($var)){
    // if(is_double($var)){
    // if(is_real($var)){
    // if(is_real($var)){
    //     echo "<br> $var is Float";
    // }else{
    //     echo "<br> $var is not an Float";
    // }

?>

<?php

        // ismay Basically yeah matter nhi krta hai kay value float ya kia hai bss numeric ho

        // $var = 86;
        // echo is_numeric($var) . "<br>";
        // var_dump(is_numeric($var));
        // if(is_numeric($var)){
        //     echo "<br> $var is numeric";
        // }
        // else{
        //     echo "<br> $var is not an numeric";
        // }

?>

<?php

// $var = 86;
// $var = '86owyaar';
// echo is_string($var) . "<br>";
// var_dump(is_string($var));
// if(is_string($var)){
//     echo "<br> $var is String";
// }
// else{
//     echo "<br> $var is not an String";
// }

?>

<?php

// $var = true;
// $var = false;
// echo is_bool($var) . "<br>";
// var_dump(is_bool($var));
// if(is_bool($var)){
//     echo "<br> $var is Boolean";
// }
// else{
//     echo "<br> $var is not an Boolean";
// }


?>

<?php

// $var = null;
// echo is_null($var) . "<br>";
// var_dump(is_null($var));
// if(is_null($var)){
//     echo "<br> $var is Null";
// }
// else{
//     echo "<br> $var is not an Null";
// }


?>

<?php

// $var = array(32,6,56);
// echo is_array($var) . "<br>";
// var_dump(is_array($var));
// if(is_array($var)){
//     echo "<br> $var is Array";
// }
// else{
//     echo "<br> $var is not an Array";
// }

?>

<?php

// Yeah Basically Array ki Value ko Count krnay may maddad krta hai

// $var = array(32,6,56);
// echo is_countable($var) . "<br>";
// var_dump(is_countable($var));
// if(is_countable($var)){
//     echo "<br> $var is Countable";
// }
// else{
//     echo "<br> $var is not an Countable";
// }

?>

<?php

// Yah Basically Check krta hai kay value agar array ya object hai to yeah false return krta hai otherwise true return krta hai

// $var = array(32,6,56);
// $var = "Scaller work good";
// $var = "S43";
// echo is_scalar($var) . "<br>";
// var_dump(is_scalar($var));
// if(is_scalar($var)){
//     echo "<br> $var is scalar";
// }
// else{
//     echo "<br> $var is not an scalar";
// }

?>

<?php

// Yeah basically yeah check krta hai kay yeah function hai kay nhi

function isCallableFunc(){

}

// echo is_callable('isCallableFunc') . "<br>";
// var_dump(is_callable('isCallableFunc'));
// ==============================================
echo is_callable('isCallableFunc24s') . "<br>";
var_dump(is_callable('isCallableFunc24s'));



?>