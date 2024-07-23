<?php

    // $var = "Jack'son'ville";
    // $var = "<h1>Jack'son'ville</h1>";
    // $var = "<h1>Jack'son' &  ville™©Æ</h1>";
    // $var = "<h1>Jack'son' &  ville™©Æ</h1>";
    $var = "<h1>Jack'son' &  ville™©Æ</h1>";

    // echo filter_var($var, FILTER_SANITIZE_MAGIC_QUOTES); not available in latest version
    // echo filter_var($var, FILTER_SANITIZE_ADD_SLASHES);
    // echo filter_var($var, FILTER_SANITIZE_STRING);
    // echo filter_var($var, FILTER_UNSAFE_RAW);
    // echo filter_var($var, FILTER_UNSAFE_RAW,FILTER_FLAG_ENCODE_AMP);
    // echo filter_var($var, FILTER_UNSAFE_RAW,FILTER_FLAG_STRIP_HIGH);
    // echo filter_var($var, FILTER_SANITIZE_ENCODED);
    // after encoded %3Ch1%3EJack%27son%27%20%26%20%20ville%E2%84%A2%C2%A9%C3%86%3C%2Fh1%3E
    // echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_STRIP_HIGH);
    // ab yeah ascii code ko bhi encode krdega====================================
    // echo filter_var($var, FILTER_SANITIZE_ENCODED,FILTER_FLAG_ENCODE_HIGH);
    // ================
    echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
    // after this <h1>Jack'son' & ville™©Æ</h1>
?>