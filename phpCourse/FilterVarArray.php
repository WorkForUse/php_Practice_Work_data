<!-- filter_var_array(data array, filter array); -->
<?php

// $arr = Array (
//     "stname" => "Rio Shaukh",
//     "stmarks" => "92",
//     "stemail" => "rio289@gmail.com"
// );
// $filters = array(
//     // "stname" => FILTER_SANITIZE_STRING,
//     "stname" => FILTER_UNSAFE_RAW,
//     "stmarks" => array(
//         "filter" => FILTER_VALIDATE_INT,
//         "options" => array(
//             "min_range" => 1,
//             "max_range" => 100
//         )
//         ),
//         "stemail" => FILTER_SANITIZE_EMAIL
// );

// echo "<pre>";
// print_r(filter_var_array($arr,$filters));
// echo "</pre>";

?>

<?php

$arr = Array (
    "stname" => "Rio Shaukh",
    "stmarks" => "92",
    "stemail" => "rio289@gmail.com"
);
$filters = array(
    "stname" => array (
        "filter" => FILTER_UNSAFE_RAW,
        "flags" => FILTER_FLAG_STRIP_HIGH
    ),

    "stmarks" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        )
        ),
        "stemail" => FILTER_SANITIZE_EMAIL
);

echo "<pre>";
print_r(filter_var_array($arr,$filters));
echo "</pre>";

?>