<?php

    // $var = "alex(.mark)@exa//mple.com";

    // // echo filter_var($var,FILTER_SANITIZE_EMAIL);
    // $var = filter_var($var,FILTER_SANITIZE_EMAIL);

    // if(filter_var($var,FILTER_VALIDATE_EMAIL)){
    //     echo "<br>$var is valid email";
    // }else{
    //     echo "<br>$var is not an valid email";
    // }

?>

<?php

    // $var = "https://developer.apple.com/deshfgh          //////////////  ty5645758232ign/humaSSSSn-interface-SSDFsfsdg54 hgfguidelines";

    // // echo filter_var($var,FILTER_SANITIZE_EMAIL);
    // $var = filter_var($var,FILTER_SANITIZE_URL);

    // if(filter_var($var,FILTER_VALIDATE_URL)){
    //     echo "<br>$var is valid url";
    // }else{
    //     echo "<br>$var is not an valid url";
    // }

?>

<?php

    // yeah + - ko sanitize nhi krta | but agar aap after integer daalo gau to invalid krdega
    // $var = "545S5axgjtyj675756";

    // // echo filter_var($var,FILTER_SANITIZE_EMAIL);
    // $var = filter_var($var,FILTER_SANITIZE_NUMBER_INT);

    // if(filter_var($var,FILTER_VALIDATE_INT)){
    //     echo "<br>$var is valid Integer";
    // }else{
    //     echo "<br>$var is not an valid Integer";
    // }

?>

<?php

// $var = "45.89";
// $var = "45.89s456z";
// $var = "100,2000";
$var = "1002000e";

// echo filter_var($var,FILTER_SANITIZE_EMAIL);
// $var = filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT);
// use with flags because . ni hatana float say =============================
// $var = filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
// agar aap , dikhana chahtay hai tu aap flag use krega kuch istrha
// $var = filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_THOUSAND);
// agar aap koi sceintific calculation nhi hata chahtay to aap is flag ko use kregay============
$var = filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_SCIENTIFIC);

if(filter_var($var,FILTER_VALIDATE_FLOAT)){
    echo "<br>$var is valid Float";
}else{
    echo "<br>$var is not an valid Float";
}

?>