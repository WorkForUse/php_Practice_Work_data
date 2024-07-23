<?php

// $conn = mysqli_connect("localhost","root","","test") or die("Connection Failed );
// $conn = mysqli_connect("localhost","root","","test2") or die("Connection Failed : " . mysqli_connect_error());
// $conn = mysqli_connect("localhost","root2","","test") or die("Connection Failed : " . mysqli_connect_error());
// $conn = mysqli_connect("localhost1","root","","test") or die("Connection Failed : " . mysqli_connect_error());
// Yeah Bassically error kay number batata hai ===============================
// $conn = mysqli_connect("localhost1","root","","test") or die("Connection Failed : " . mysqli_connect_errno());

// ==========================
$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

// $sql = "SELECT * FROM students";
// Now work with SQL------================================
// result jo error aya Query Failed : Table 'test.studen' doesn't exist
// $sql = "SELECT * FROM studen";
// $result = mysqli_query($conn,$sql) or die("Query Failed : " . mysqli_error($conn));
// ===========================
// suntax error show -> (Query Failed : You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROMS students' at line 1)
// $sql = "SELECT * FROMS students";
// $result = mysqli_query($conn,$sql) or die("Query Failed : " . mysqli_error($conn));
// Yeah method hamay error return krta hai uskay andar message hoga aur numbers hoga this is also only for SQL
$sql = "SELECT * FsROM studsents";
$result = mysqli_query($conn,$sql);
// hum issay echo bhi nhi krsaktay hum issay print_r ki help say dekhayngay
print_r(mysqli_error_list($conn));
die();

$str = "";
if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        echo $row['first_name'] . " " . $row['last_name'] . "<br>";
    }

}

?>