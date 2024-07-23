<?php

    $conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

    $sql = "SELECT * FROM stdata WHERE id = {$_POST['id']}";

    $result = mysqli_query($conn,$sql) or die("mySQL Query Failed");

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // echo "<pre>";
    // print_r($output);
    // echo "</pre>";

    // transfer array to json format===========
    echo json_encode($output);

?>