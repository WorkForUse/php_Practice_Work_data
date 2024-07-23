<?php

// $a = array("Red",2343,"Blue",464,"Indego");
// $a = ["Red",2343,"Blue",464,"Indego"];

// echo $a[0]."<br>";
// echo $a[1]."<br>";
// echo $a[2]."<br>";
// echo $a[3]."<br>";
// echo $a[4];

// echo "<pre>";
//      print_r($a);
// echo "</pre>";

// aray with for loop

// $a = ["Red",2343,"Blue",464,"Indego"];
// for($i = 0; $i < 5; $i++){
//     echo $i."<br>";
// }

// PHP Associative Array

// $age = array("bill" => 24, "steve" => 214, "elon" => 124);
// $age = ["bill" => 24, "steve" => 214, "elon" => 124];

// echo $age["elon"];

// $age = ["bill" => 24, "steve" => 214, "elon" => 124];

// print_r($age);

// $age = ["bill" => 24, "steve" => 214, "elon" => 124];

// var_dump($age);

// $age = ["bill" => 24, "steve" => 214, "elon" => 124];
// $age["steve"] = 420;

// var_dump($age);

// $age = [1 => "SlashTwo", 22 => "Hashtag", 33 => "O nash"];
// $age[22] = "VarDumpTwoDats";

// var_dump($age);

// $age = [1 => "SlashTwo", 22 => "Hashtag", 33 => "O nash" , "Ioa" => 645];
// $age[22] = "VarDumpTwoDats";

// var_dump($age);

// for Each Loop

// $colors = ["red","green","blue"];

// foreach($colors as $value){
//     echo $value . "<br>";
// }

// $colors = [12 => "red",54 => "green", 65 => "blue"];

// foreach($colors as $value){
//     echo $value . "<br>";
// }

// $colors = [12 => "red",54 => "green", 65 => "blue"];

// foreach($colors as $key => $value){
//     echo "$key = $value" . "<br>";
// }

// PHP Multidimensional Array / Ya / Nested Array

//     $emp = [
//         [1,"IowaKhan", "manager", "50k"],
//         [2,"IdahoKhan", "salesman", "70k"],
//         [1,"InsanseKhan", "Peon", "150k"],
//         [1,"BlackKhan", "Clerk", "450k"],
//         [1,"PitchBlackKhan", "Lawyer", "560k"]
//     ];

//    echo "<pre>";
//         print_r($emp);
//    echo "</pre>";

//     $emp = [
//         [1,"IowaKhan", "manager", "50k"],
//         [2,"IdahoKhan", "salesman", "70k"],
//         [3,"InsanseKhan", "Peon", "150k"],
//         [4,"BlackKhan", "Clerk", "450k"],
//         [5,"PitchBlackKhan", "Lawyer", "560k"],
//     ];

//    echo $emp[4][1];

//    echo "<pre>";
//         print_r($emp);
//    echo "</pre>";

// $emp = [
//     [1,"IowaKhan", "manager", "50k"],
//     [2,"IdahoKhan", "salesman", "70k"],
//     [3,"InsanseKhan", "Peon", "150k"],
//     [4,"BlackKhan", "Clerk", "450k"],
//     [5,"PitchBlackKhan", "Lawyer", "560k"],
// ];

// nested for loop with array method
// for($row = 0; $row < 5; $row ++){
//     for($col = 0; $col < 4; $col++){
//         echo $emp[$row][$col] . "";
//     }
//     echo "<br>";
// }

// $emp = [
//     [1,"IowaKhan", "manager", "50k"],
//     [2,"IdahoKhan", "salesman", "70k"],
//     [3,"InsanseKhan", "Peon", "150k"],
//     [4,"BlackKhan", "Clerk", "450k"],
//     [5,"PitchBlackKhan", "Lawyer", "560k"],
// ];

// // with for each method with array 

// foreach($emp as $variableOne){
//     foreach($variableOne as $variableTwo){
//         echo $variableTwo . "";
//     }
//     echo "<br>";
// }

// $emp = [
//     [1,"IowaKhan", "manager", "50k"],
//     [2,"IdahoKhan", "salesman", "70k"],
//     [3,"InsanseKhan", "Peon", "150k"],
//     [4,"BlackKhan", "Clerk", "450k"],
//     [5,"PitchBlackKhan", "Lawyer", "560k"],
// ];

// // with for each method with array 

// echo "<table border='2px'>";
// foreach($emp as $variableOne){
//     echo "<tr>";
//     foreach($variableOne as $variableTwo){
//         echo "<td>$variableTwo</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

// PHP Multidimensional Associative Array

// $marks = [
//     "AlphaOne" => ["Physics" => 82, "math" => 78, "chemistry" => 89,],
//     "Jason" => ["Physics" => 89, "math" => 58, "chemistry" => 19,],
//     "Amlaa" => ["Physics" => 42, "math" => 68, "chemistry" => 49,],
// ];

// echo "<table border='2px'>";
// foreach($marks as $key => $variableOne){
//     echo "<tr> <td>$key</td> ";
//     foreach($variableOne as $variableTwo){
//         echo "<td>$variableTwo</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";

// echo "<pre>";
// print_r($marks);
// echo "</pre>";


// PHP Foreach Loop with List

// $emp = [
//     [1,"IowaKhan", "manager", "50k"],
//     [2,"IdahoKhan", "salesman", "70k"],
//     [3,"InsanseKhan", "Peon", "150k"],
//     [4,"BlackKhan", "Clerk", "450k"],
//     [5,"PitchBlackKhan", "Lawyer", "560k"],
// ];  

// echo "<table border='5px'>";
// foreach($emp as list($id,$name,$designation,$salary)){
//     echo "<tr> <td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td> </tr> <br>";
// }
// echo "</table>";


// PHP Foreach Loop with List with associative array

// $marks = [
//     "AlphaOne" => ["Physics" => 82, "math" => 78, "chemistry" => 89,],
//     "Jason" => ["Physics" => 89, "math" => 58, "chemistry" => 19,],
//     "Amlaa" => ["Physics" => 42, "math" => 68, "chemistry" => 49,],
// ];

// foreach($marks as list("Physics" => $marksPh,"math" => $marksMt,"chemistry" => $marksChm)){
//     echo "$marksPh $marksMt $marksChm . <br>";
// }

// PHP Array Count & Sizeof Function

// $food = ["Grapes","Orange","Pineapple","Blackberry"];

// echo sizeof($food);


// $food = array(
//     'fruits' => array("Grapes", "Orange", "Pineapple", "Blackberry"),
//     'vegetables' => array("Cucumber", "ShimaMirch", "Carrot", "ChinesOnion")
// );

// echo count($food['fruits'],1);
// echo count($food,1);

// echo sizeof($food);
// echo count($food);

// $food = ["Grapes", "Grapes", "Orange","Pineapple","Blackberry"];

// print_r( array_count_values($food) );

// $len = count($food);

// for($i = 0; $i < $len; $i++){
//     echo $food[$i] . "<br>";
// }

// PHP Array In_array & Array_search Function

// $food = ["Grapes","Orange","RedGrapes","BlueApple"];

// if( in_array("RedGrapes",$food ,true ) ){ // strict mode use here which is true/false ;
// if( in_array("RedGrapes",$food) ){
//     echo "Find Successfully";
// }else{
//     echo "Can't Find";
// };

// work with nested/multidimensional array 

// $a = array(array('p','h'), array('q','r'),'m');

// if(in_array(array('p','h'),$a, true)){
//     echo "Find Successfully Work";
// }else{
//     echo "Not Find";
// }

// Array Search Method 

// $food = ["Grapes","Orange","RedGrapes","BlueApple"];

// echo array_search("BlueApple",$food); // yeah key return krta hai // key ya index kehlo

// $food = ["A" => "Grapes","B" => "Orange","C" => "RedGrapes","D" => "BlueApple"];

// echo array_search("Orange",$food); // idhar isnay value return kri hai

 // PHP Array_replace & Array_replace_recursive

//  $colors = ["Orange","Green","Blue","Red"];  same work krtay hai dono
//  $colors = ["Orange","Green",3 => "Blue",2 =>"Red" , 47 => "AgentVinod"]; // how this work idhar aap nay inko key di 3 aur 2 ab nichay 2 ki replace hoe liken jab aap nay value daydi to wo saaray print hongay jinki aap nay key define ki hogi
//  $fruit = ["Grapes","Apple"];

// $newArray = array_replace($colors,$fruit);

// "<pre>";
//     print_r($newArray);
// "</pre>";

// work with three arrays 

//  $A_category = ["Almas","Bahadur","Cesar","Delux"];
//  $B_category = ["Elite","Fransic",];
//  $C_category = ["Galdion","Harry","Irish",];

//  $newArray = array_replace($A_category,$B_category,$C_category);

//  print_r($newArray);

//  $A_category = ["Almas","Bahadur","Cesar","Delux"];
//  $B_category = ['a' => "Elite",'b' => "Fransic",];
//  $B_category = [1 => "Elite",3 => "Fransic",];

//  $newArray = array_replace($A_category,$B_category);

//  print_r($newArray);

// array recursive function

// $arr1 = ["a"=> array("Red"),"b"=> array("Green","Pink")]; 
// $arr2 = ["a"=> array("Yellow"),"b"=> array("PitchBlack")];

// $newArray = array_replace_recursive($arr1,$arr2);

// print_r($newArray);

//  PHP Array_pop & Array_push / yeah dono last may hi add aur remove krtay hai 
// Array_pop jo hai wo last say remove krdayta hai value ko 
// Array_push jo hai wo last may add krdayta hai value ko

// $fruits = ["Orange","Grapes","Apple","Mango"];

// array_pop($fruits);

// echo "<pre>";
//     print_r($fruits);
// echo "</pre>";

// $fruits = ["Orange","Grapes","Apple","Mango"];

// array_push($fruits,"Pineapple","Blackberry");

// echo "<pre>";
//     print_r($fruits);
// echo "</pre>";

// PHP Array_shift & Array_unshift / yeah dono Start may hi add aur remove krtay hai 
// Array_pop jo hai wo Start say remove krdayta hai value ko 
// Array_push jo hai wo Start may add krdayta hai value ko

// $fruits = ["Orange","Grapes","Apple","Mango"];

// array_shift($fruits);

// echo "<pre>";
//     print_r($fruits);
// echo "</pre>";

// $fruits = ["Orange","Grapes","Apple","Mango"];

// array_unshift($fruits,"Pineapple","Blackberry");

// echo "<pre>";
//     print_r($fruits);
// echo "</pre>";

// Php_merge <- Index array

// $a = ["Grapes","Apple"];
// $b = ["Guava","Papaya"];
// $c = array_merge($a,$b);

// echo "<pre>";
//     print_r($c);
// echo "</pre>";

// Work With Associative Php_meger method <- AlhpaNUmeric = Index or Alphabet <- Your Choice

// $a = ["Grapes","Apple"];
// $b = ["a"=> "Guava","b"=> "Papaya"];
// $c = array_merge($a,$b);

// echo "<pre>";
//     print_r($c);
// echo "</pre>";

// like this is alphaNumeric Method  👇 

// Array
// (
//     [0] => Grapes
//     [1] => Apple
//     [a] => Guava
//     [b] => Papaya
// )

// $a = ["a"=>"grapes","b"=>"Banana"];
// $b = ["b"=>"GUava","b"=>"RedApple"];

// $newArray = $a + $b;
// echo "<pre>";
//     print_r($newArray);
// echo "</pre>";

// here you can see 👇 

// Array
// (
//     [a] => grapes
//     [b] => Banana //b pr sirf banana aya yeh do nhi aye ["b"=>"GUava","b"=>"RedApple"]; KYon kyonkay is line nay overwrite nhi kia usnay add krdia
// )

// Array_merge Recusrive this is different 

// $a = ["a"=> "Orange","b"=> "Banana","c"=>"grapes"];
// $b = ["b"=>['colors'=>['red,green,blue']],'e'=>'peanuts',65,34];
// $newArr = array_merge_recursive($a,$b);

// echo "<pre>";
//     print_r($newArr);
// echo "</pre>";

// result of this work 👆 // yeah jitni bhi value hoti bhalay hi wo same wo sb show krwadayta hai

// Array
// Array
// (
//     [a] => Orange
//     [b] => Array
//         (
//             [0] => Banana
//             [colors] => Array
//                 (
//                     [0] => red,green,blue
//                 )

//         )

//     [c] => grapes
//     [e] => peanuts
//     [0] => 65
//     [1] => 34
// )

// Array_combine how it works // aap dono pair may aik jitni value rkho gay warna error ayega like agar aap aik array may 2 rkhtay ho aur dosrya may 4 rkhtay ho to error ajayega aur result associative array ki trha ata hai is array function ka

// $a = ["Jack","Cassidy","Luck"];
// $b =[21,"Ba","54"];
// $newArr = array_combine($a,$b);
// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// PHP Array_Slice Function

// $a = ["Jack","Mac","Alias","Oliver","Christorphian"];
// $newArr = array_slice($a,2,2);

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// let's work in negative value

// $a = ["Jack","Mac","Alias","Oliver","Christorphian"];
// $newArr = array_slice($a,-3,3);

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// work with preserve keyword -> true/false is say jo value hoti hai wahi ati hai

// $a = ["Jack","Mac","Alias","Oliver","Christorphian"];
// $newArr = array_slice($a,-3,3,true);

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// PHP Array_Splice Function

// $a = ["red","green","Blue"];

// $newArr = Array_Splice($a,0,2);

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// $a = ["red","green","Blue","Indego","Yellow","Pink","White","Pitchblack"];

// $newArr = Array_Splice($a,1,-2);

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// $a = ["red","green","Blue","Indego","Yellow","Pink","White","Pitchblack"];
// $b = ["purple","neon","Claret"];

// // $newArr = Array_Splice($a,2,2,$b);
// array_splice($a,2,count($a),$b);

// echo "<pre>";
// print_r($a);
// echo "</pre>";

// PHP Array Key Functions

// $color = ["red","green","blue","yellow"];
// $color = [23=>"red",54=>"green",34=>"blue",12=>"yellow"];
// $newArray = array_key_exists(54,$color); // here 0 aur 1 return hoga like true / false
// $newArray = array_key_first($color); 
// $newArray = array_key_last($color);

// $newArr = array_key_exists(54,$color);

// if($newArr){
//     echo "True";
// }else{
//     echo "False";
// }

// PHP Array Intersect Functions 

// $a = [21=>"red","Claret-red",6=>"Purple"];
// $b = ["Blue",21=>"red",5=>"Pitchblack"];
// $newArr = array_intersect($a,$b);

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// $a = [20=>"red","Claret-red",5=>"Purple"];
// $b = ["Blue",21=>"red",5=>"Pitchblack"];
// $newArr = array_intersect($a,$b);

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// $a = [20=>"red","Claret-red",5=>"Purple"];
// $b = ["Blue",20=>"red",5=>"Pitchblack"];
// $newArr = array_intersect_key($a,$b);

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// for the index same value aye uskay lue assoc hota hai like associative // idahr key aur value dono same honi chaye

// $a = [20=>"red","Claret-red",5=>"Purple"];
// $b = ["Blue",20=>"red",5=>"Pitchblack"];
// $newArr = array_intersect_assoc($a,$b);

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// function normalfunctioncompare($a,$b){
//     if($a === $b){
//         return 0;
//     }
//     return ($a > $b)? 1 : -1;
// }

// $a = [20=>"red","Claret-red",5=>"Purple"];
// $b = ["Blue",20=>"red",5=>"Pitchblack"];
// $newArr = array_intersect_uassoc($a,$b,"normalfunctioncompare");

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// function normalfunctioncompare($a,$b){
//     if($a === $b){
//         return 0;
//     }
//     return ($a > $b)? 1 : -1;
// }

// $a = [20=>"red","Claret-red",5=>"Purple"];
// $b = ["Blue",20=>"red",5=>"Pitchblack"];
// $newArr = array_uintersect_assoc($a,$b,"normalfunctioncompare");

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// function normalfunctioncompare($a,$b){
//     if($a === $b){
//         return 0;
//     }
//     return ($a > $b)? 1 : -1;
// }

// $a = [20=>"red","Claret-red",5=>"Purple"];
// $b = ["Blue",20=>"red",5=>"Pitchblack"];
// $newArr = array_intersect_ukey($a,$b,"normalfunctioncompare");

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// function normalfunctioncompare($a,$b){
//     if($a === $b){
//         return 0;
//     }
//     return ($a > $b)? 1 : -1;
// }

// $a = [20=>"red","Claret-red",5=>"Pitchblack"];
// $b = ["Blue",22=>"red",15=>"Pitchblack"];
// $newArr = array_uintersect($a,$b,"normalfunctioncompare"); // here yeah index ko match nhi krega sirf value ko match krega

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// function matchkey($a,$b){
//     if($a === $b){
//         return 0;
//     }
//     return ($a > $b)? 1 : -1;
// }

// function matchvalue($a,$b){
//     if($a === $b){
//         return 0;
//     }
//     return ($a > $b)? 1 : -1;
// }

// $a = [20=>"red","Claret-red",15=>"Pitchblack"];
// $b = ["Blue",20=>"red",15=>"Pitchblack"];
// $newArr = array_uintersect_uassoc($a,$b,"matchkey","matchvalue"); // here yeah dono ko match kregas

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// PHP Array Diff & Udiff Functions ______👇

// value ko compare krnau kay lye array_diff hota hai
// agar aap key ko compare krna chahtay hai to array_diff_key use hoga
// agar aap both value and key ko compare krna hai to array_key_assoc use hoga

// diff yeah sb 👆 uppr waali in say match value nhi ati jo match nhi ho rhi hogi wo ayegi 

// $a1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
// $a2 = ["a"=>"red","f"=>"green","d"=>"purple"];

// $newArr = array_diff($a1,$a2,$a3);
// $a3 = ["a"=>"red","b"=>"yellow","h"=>"PitchBlack"];
// $newArr = array_diff_key($a1,$a2);
// $newArr = array_diff_assoc($a1,$a2);
// $newArr = array_diff_assoc($a1,$a2,comparefunction <- u = user define may 3 parameters laazmi hotay hai); // uassoc -> u = user define function

// -- for the user define -- 

// function compare($a1,$a2){
//     if($a1 === $a2){
//         return 0;
//     }
//     return ($a1 > $a2) ? 1 : -1;
// }

// $a1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
// $a2 = ["a"=>"red","f"=>"green","d"=>"purple"];

// $newArr = array_diff_uassoc($a1,$a2,"compare");
// $newArr = array_udiff_assoc($a1,$a2,"compare");
// $newArr = array_diff_ukey($a1,$a2,"compare");
// $newArr = array_udiff($a1,$a2,"compare");


// function compareKey($a1,$a2){
//     if($a1 === $a2){
//         return 0;
//     }
//     return ($a1 > $a2) ? 1 : -1;
// }
// function compareValue($a1,$a2){
//     if($a1 === $a2){
//         return 0;
//     }
//     return ($a1 > $a2) ? 1 : -1;
// }

// $a1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
// $a2 = ["a"=>"red","f"=>"green","d"=>"purple"];

// $newArr = array_udiff_uassoc($a1,$a2,"compareKey","compareValue");


// echo "<pre>";
//     print_r($newArr);
// echo "</pre>";

// PHP Array_Values & Array_Unique
// array_values value ko nikalnay may kaam ata hai ismay key use ni hoti agar aap ko saari value nikaalni hai this function always use with assoc array yeah hamay index array return krta hai
// like this 👉 Array
// (
//     [0] => Pitch_Black
//     [1] => Neon_Green
// )

// aray_unique dublicate value ko nikalta hai aur new array return krta hai
// like this 👉 Array
// (
//     [a] => Pitch_Black
//     [b] => Neon_Green
// )

// $arr = ["a"=>"Pitch_Black","b"=>"Neon_Green","b"=>"Neon_Green","b"=>"Neon_Green","a"=>"Pitch_Black","a"=>"Pitch_Black",];

// $newArr = array_values($arr);
// $newArr = array_unique($arr);

// echo "<pre>";
//     print_r($newArr);
// echo "</pre>";

// PHP Array_Column & Array_Chunk Function

// $arr = [
//     [
//         'id' => 2201,
//         'fname' => "Dablewu",
//         'lname' => "aeff",
//     ],
//     [
//         'id' => 2301,
//         'fname' => "Aehch",
//         'lname' => "Ai",
//     ],
//     [
//         'id' => 5201,
//         'fname' => "Oo",
//         'lname' => "Qeu",
//     ],
// ];

// $newArr = array_column($arr,'fname');
// is say kissi bhi aik value ko utha kr aap ussay new array bana saktay ho
// agar aap ko with key bhi chaye / assoc array bhi us krna hai to aap 3rd parameter bhi dongay like this
// $newArr = array_column($arr,'fname','id'); // iski example
// Array
// (
//     [2201] => Dablewu
//     [2301] => Aehch
//     [5201] => Oo
// )

// values ka pair bananay kay lye array_chunk use hotah hai
// ismay bassically array(array,size) yeah 2 cheezay use hoti hai 

// $arr = ["BMW","VOLVO","BENZ","CHEVRLOT","LAMBORGHINI","PORSCHE"];

// $newArr = array_chunk($arr,4);


// echo "<pre>";
//     print_r($newArr);
// echo "</pre>";

// $arr = [12=> "BMW",65=> "VOLVO",56=> "BENZ",76=> "CHEVRLOT",65=> "LAMBORGHINI",75=> "PORSCHE"];
// this will return index array
// agar aap with key bhi return krna chahtay hotu boolean daydo true like this preserve keyword
// $newArr = array_chunk($arr,4,true);
// $newArr = array_chunk($arr,4);

// echo "<pre>";
//     print_r($newArr);
// echo "</pre>";

// PHP Array_Flip & Array_Change_Key_Case

// array_flip(yeah swap krnay may kaam hai key ko value say aur value ko key say)
// for the uppercase change we use Array_Change_Key_Case like this array_Change_Key_Case(array,case)

// $a = ["Bill"=>10,"Joe" => 20, "Peter" => 30];
// // $newArr = array_flip($a);
// $newArr = array_change_key_case($a,CASE_UPPER);

// echo "<pre>";
//     print_r($newArr);
// echo "</pre>";

// PHP Array_Sum & Array_Product
// aray_sum only use for float and integer
// array product sab ko multiply krnay kye lye hotah hai

// $a = [10,20,30,40,50];
// $a = ["a"=>1.2,"b"=>26.7,"c"=>3.8,"d"=>4.1];
// $newArr = array_sum($a);
// $a = [10,20,30,40,50];
// $newArr = array_product($a);

// echo "<pre>";
//     print_r($newArr);
// echo "</pre>";

// PHP Array_Rand & Shuffle Function

// array_rand use for random value like index
// array_rand(array,number);

// array_shuffle use for apas may position change krnay kay lye kaam ata hai
// array_shuffle(array)

// $color = [34=>"Red",65=>"blue",56=>"Green",76=>"Yellow",85=>'Orange'];

// $color = ["Red","blue","Green","Yellow",'Orange'];

// $newArr = array_rand($color,2);
// shuffle($color);

// echo "<pre>";
//     print_r($color);
// echo "</pre>";

// echo "<pre>";
//     print_r($newArr);
// echo "</pre>";

// echo $color[$newArr[0]];
// echo $color[$newArr[1]];

// PHP Array_Fill & Array_Fill_Keys

// array_fill same value return krta hai aur jo value hoti hai ussay assoc krta hai

// array_fill kissi spefic value say start krnay may kaam ata hai 
// array_fill(index,number,value)

// $a = ["a","b","c","d",'e',"f"];
// $newArr = array_fill_keys($a,"Testorial");

// iskay lye aap ko array dayni ki require nhi hai
// $newArr = array_fill(3,4,"TestCode");

// echo "<pre>";
//     print_r($newArr);
// echo "</pre>";

// PHP Array_Walk & Array_Walk_Recursive

// agar aap array ki hr value kay lye function run krna chahtay hai to aap array_walk use krayngay
// array_walk(array,function,parameter<-optional)
// this will use only index array or assoc array
// not nested assoc/normal array

// for the multidimensional array
// we use array_walk)recursive

// $fruit = ["a"=>"Lemon","b"=>"Orange","c"=>"Banana","d"=>"Apple"];

// array_walk($fruit,"myfunc","is a key of");
// array_walk($fruit,"myfunc");

// function myfunc($value,$key,$param){
// function myfunc($value,$key){
//     // echo "$key $param : $value <br>";
//     echo "$key : $value <br>";
// }

// echo "<pre>";
//     print_r($newArr);
// echo "</pre>";

// $fruit = ["a"=>"Lemon","b"=>"Orange","c"=>"Banana","d"=>"Apple"];

// $veggie = [$fruit, 1=>"Carrot",2=>"Tomatoes"];

// array_walk_recursive($veggie,"myfunc","here key");

// function myfunc($value,$key,$parameteR){
//     echo "$key $parameteR $value <br>";
// }

// PHP Array_Map Function 
// in array map you can add multiple array like syntax here array(function,multiple array)

    // function myfunc($r){
    //    return $r + $r;
    // }

    // $arr = [1,2,3,4,5,6];

    // $newArr = array_map('myfunc',$arr);

    // echo"<pre>";
    // print_r($newArr);
    // echo"</pre>";

    // function myfunc($r,$p){
        // return "$r by $p";
    //     return [$r => $p]; // for the multi dimensional associative array we use this method
    //  }
 
    //  $arr = [1,2,3,4,5,6];
    //  $strArr = ["Sting","Cactus","Heroic","Crisma","Bru","Rio"];
 
    //  $newArr = array_map('myfunc',$arr,$strArr); // if we are not use function like this we add null then yeah aap ko dimensional associative array return krdayga
    //  $newArr = array_map('myfunc',$arr,$strArr);
 
    //  echo"<pre>";
    //  print_r($newArr);
    //  echo"</pre>"

    // WORK WITH ASSOCIATIVE ARRAY

    // function myfunc($r){
    //     return strtoupper($r);
    //  }
 
    //  $strArr = [ "one" => "Sting", "Two" => "Cactus", "Three" => "Heroic", "Four" => "Crisma" ];
 
    //  $newArr = array_map('myfunc',$strArr);
 
    //  echo"<pre>";
    //  print_r($newArr);
    //  echo"</pre>"

    //PHP Array_Reduce
    // array(array,function,initial) // initial optional hoti hai

    // function myfunc($arr,$fn){
    //     // return $arr . "-" . $fn;
    //     // return $arr + $fn;
    //     // return $arr * $fn;
    //     // $multiply = $arr * $fn;
    //     // return $multiply;
    //      $arr *= $fn;
    //     return $arr;
    // }

    // // $a = ['ORange','Banana','Apple'];
    // $a = [1,2,3,4,5];

    // $newArr = array_reduce($a,'myfunc');
    // // $newArr = array_reduce($a,'myfunc','BlackBerry');
    // $newArr = array_reduce($a,'myfunc',21);

    //  echo"<pre>";
    //  print_r($newArr);
    //  echo"</pre>"

    // Array Sorting Function

    // $aR = ["Guava","RedOxe","Pineapple","Italian"];
    // $aR = ["a"=>"Guava","b"=>"RedOxe","c"=>"Pineapple","d"=>"Italian"];
    // sort($aR);
    // rsort($aR); // this is use for reserve sort
    // asort($aR); // this is use for associative array
    //arsort($aR); // this is use for associative reserve order sort
    // ksort($aR); // key sort krayga
    // krsort($aR); // key reserve sort krega
    //natsort($aR); // natural order sort krega
    // natcasesort($aR); // natural case sort krega
    //  echo"<pre>";
    //  print_r($aR);
    //  echo"</pre>"

    // In the array_multisort(you can add multiple array sorting)

    // $arr = ["Orange","Banana","Grapes","Lemon"];

    // $newArr = array_reverse($arr);

    //  echo"<pre>";
    //  print_r($newArr);
    //  echo"</pre>"

    // Array Traversing Function
    // $arr = [23,54,75,674,65];
    // echo current($arr); // start wala ayega
    // echo key($arr); // start wala index ayega
    // echo pos($arr); // current position start waali ayegi
    // echo next($arr)."<br>"; // next yaani second index ki value show krayega
    // echo prev($arr)."<br>"; // previous pr chala jayega
    // echo end($arr)."<br>"; // last wali index ki value ayegi
    // echo key($arr)."<br>"; // key kay lye

    // for the key and value define we use each()
//    echo "<pre>";
//         print_r(each($arr));
//    echo "</pre>";

  //  echo reset($arr); // for the reset use we use this

//   Array List Function 
// asoc numeric value krega 
// alphabet assoc value nhi allow krega
// $color = ['red','green','blue','white'];

// $color = [1231,64,234];
// list($a,$b,$c) = $color;
// echo "Value of a : $a <br>";
// echo "Value of b : $b <br>";
// echo "Value of c : $c <br>";

// $color = [1231,64,234];
// list($a,$b,$c) = $color;
// echo "Value of a : $a <br>";
// echo "Value of b : $b <br>";
// echo "Value of c : $c <br>";

// Array Extract & Compact Function

// for the assoc index convert into var 
// we use extract(array,extract_rules,prefix)

// $first = "PitchBlack";
// $color = ["first"=>"Red","Second"=>"Blue","Third"=>"Green"];
// extract($color);
// extract($color,EXTR_OVERWRITE);
// extract($color,EXTR_SKIP); // for array value skip
// extract($color,EXTR_PREFIX_SAME,"Test"); // agar dono ko print krwana hai to yeah use kro
// extract($color,EXTR_PREFIX_ALL,"Tst");
// echo $first;
// echo $Test_first;
// echo $first;
// echo $Tst_first;

// comapct we use for agar variable ko assoc may convert krna hai to hum yeh use kregay
// syntax of compact compact(ismay aap variable define krdogay jitna aap krna chaho for example , var1,var2,var3,var4)

// $a = 'Red';
// $b = 'Green';
// $c = 'Blue';
// // here we add another variables
// $d = "salman";
// $e = "Paposh";

// $extra = ["d","e"];

// $newArr = compact("a","b","c");
// $newArr = compact("a","b","c",$extra);

// echo "<pre>";
//         print_r($newArr);
// echo "</pre>";

// Array_Range
// range(start,end,step) step optional hota hai
// this is used with alpha and numeric

// $newArr = range(1,10);
// $newArr = range(1,100,14); // increment step by step
// $newArr = range('z','i');
// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// work with foreach loop 
// foreach(range('z','i') as $letter){
//     echo $letter . "<br>";
// }

// Explode & Implode Function

// convert to string to array we use Explode function
// syntax -> explode(seperator,string,limit)

// $str = "hello yaar how are you";
// $newArr = explode(" ",$str);
// $newArr = explode(" ",$str,2);
// $newArr = explode(" ",$str,-2); // if we add negative value to ussay chor kr index array return krdega for example "are you" nhi aya

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// Implode use for array to convert string
// impolde(seperator,array) // join & Implode both same

// $newArr = [32,546,56,54];
// $captureIntoString = implode("~",$newArr);
// $captureIntoString = join("~",$newArr);

// print_r($captureIntoString);




?>