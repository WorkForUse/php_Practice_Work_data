<?php

$conn = mysqli_connect("localhost","root","","test") or die("Connection Failed");

$sql = "SELECT * FROM students";
$result = mysqli_query($conn,$sql) or die("Query Failed");

// YEah Associative Array Fetch Krkay Laata hai | Aur yeah aik baari may aik hi result pass krta hai | Fetch Assoc may Keys bhi appear hoti hai
// $row = mysqli_fetch_assoc($result);

// echo "<pre>";
//     print_r($row);
// echo "</pre>";

// echo $row['first_name'] . " " . $row['last_name'];

// Sarri Values dekhlay kye lye loop chalana prega

// while($row = mysqli_fetch_assoc($result)){
//     echo $row['first_name'] . " " . $row['last_name'] . "<br>";  
// }

// Fetch Row==============================================================
// Yeah aik first wali row ko hi layega liken ussay index array bana dayga
// $row = mysqli_fetch_row($result);
// echo "<pre>";
//     print_r($row);
// echo "</pre>";
// Ab yeah key say saath define krnay ki zaroorat nhi just mujhay index define krdayna kuch istrha
// echo $row[1] . " " . $row[2];

// while($row = mysqli_fetch_row($result)){
//     echo $row[1] . " " . $row[2] . "<br>";  
// }

// MySQLi Fetch Array ====================================================== yeah assoc aur index dono trha ka data return krta hai| aur yeah aik hi baari may aik hi dta fetch krega
// $row = mysqli_fetch_array($result);
    // Agar aap ko sirf assoc type ka data chaye ======
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // Agar aap ko sirf index type ka data chaye ======
// $row = mysqli_fetch_array($result,MYSQLI_NUM);
// Default value
// $row = mysqli_fetch_array($result,MYSQLI_BOTH);
// echo "<pre>";
//     print_r($row);
// echo "</pre>";
// echo $row[1] . " " . $row[2];
// echo $row['first_name'] . " " . $row[2];

// yeah jitna bhi data hai sab ko nikal kr lay ayega aur usko multidimensional array bana dayga by default yeah index array hi return krta hai aap ko
// $row = mysqli_fetch_all($result);
// agar aap chahtay kay aap ko assoc array millay ===================================
// $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
// agar aap chahtay kay aap ko index array millay ===================================
// $row = mysqli_fetch_all($result,MYSQLI_NUM);
// ======================================================
// $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
// echo "<pre>";
//     print_r($row);
// echo "</pre>";
// for the printing
// foreach($row as $data){
//     echo $data['id'] . " " . $data['first_name'] . " " . $data['last_name'] . "<br>";
// }
// ======================================================== yeah column ki information fetch krkay lata hai
// $row = mysqli_fetch_field($result);
// echo "<pre>";
//     print_r($row);
// echo "</pre>";
// agar aap ko sab column ki value dekhni hai to ===================
// while($field = mysqli_fetch_field($result)){
// echo "<pre>";
//     print_r($field);
// echo "</pre>";
// }
// agar aap isko without array dekhna chahtay hai to ===========================
//  agar aap koi conditional based programming krna chahtay hai uski core value dekhanay kay lye to aap yeah use krsaktay hai
// while($field = mysqli_fetch_field($result)){
//     echo $field->name . " " . $field->max_length . "<br>";
// }

?>