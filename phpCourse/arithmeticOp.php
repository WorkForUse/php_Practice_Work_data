<?php

// $a = 13;
// $b = 5;

// $c = $a + $b * 2 ;
// $c = ($a + $b) * 2 ; // calculation pehlay chalani hai to () combine krdo
// echo $c;

// $c = $a + $b;
// $c = $a - $b;
// $c = $a / $b;
// $c = $a ** $b;
// $c = $a % $b;
// $c = $a * $b;
// echo $c;

// $a = 13;
// $a++; // baad may increment hoti hai
// ++$a; // pehlay increment hoti hai
// $a--;
// --$a;
// echo $a;


// Asigment Operator 

// $a = 10;
// $b = 12;

// $a += $b; // $a = $a + $b
// $a -= $b; // $a = $a - $b
// $a /= $b; // $a = $a / $b
// $a %= $b; // $a = $a / $b
// $a **= $b; // $a = $a xx $b

// echo $a;

// Comparison Operators

// $a = 10;
// $b = 10;
// $b = 10;

// echo $a == $b;
// echo $a === $b; // Data type bhi match karay

// echo $a != $b;
// echo $a !== $b;

// echo $a <> $b;
// echo $a > $b;
// echo $a < $b;
// echo $a >= $b;
// echo $a <= $b;

// echo $a <=> $b ; // it returns -1 , 0 or 1

// IF Statement

// $a = 14;
// $b = 12;

// if($a > $b){
//     echo "True Answer";
// }else{
//     echo "Please Input Right Answer";
// }
// $a = 14;
// // $b = 14;
// $b = 14;

// if($a == $b):
//     echo "True Ans";
// endif;

// logical Operator

// $age = 20;

// if($age >= 18 && $age <= 21){
// if($age >= 18 and $age <= 21){
// if($age >= 18 || $age <= 21){
// if($age >= 18 or $age <= 21){
// if(!($age <= 18)){
// if($age >= 118 xor $age <= 21){
//     echo " You are Eligible";
// }

// If Else Statement

// $x = 115;

// if($x > 30){
//     echo " X is Greater";
// }else{
//     echo "X is Smaller";
// }

// $name = "HI THERE";
// $gender = "male";

// if($gender == "other"){
// if($gender == "male"){
//     echo "Hello Mr ". $name;
// }else{
//     echo "Hello Miss ". $name;
// }

// PHP If Elseif Statement

// $per = 25;

// if($per >= 80 && $per <= 100){
//     echo "You are in Merit";
// }
// elseif($per >= 60 && $per <= 80){
//     echo "You are in 1st Division";
// }
// elseif($per >= 45 && $per <= 60){
//     echo "You are in 2nd Division";
// }
// elseif($per >= 33 && $per <= 45){
//     echo "You are in 3rd Division";
// }
// elseif($per < 33){
//     echo " You are Fail ";
// }
// else{
//     echo "Please Enter Valid Percentage";
// }

// $per = 25;

// if($per >= 80 && $per <= 100):
//     echo "You are in Merit";
// elseif($per >= 60 && $per <= 80):
//     echo "You are in 1st Division";
// elseif($per >= 45 && $per <= 60):
//     echo "You are in 2nd Division";
// elseif($per >= 33 && $per <= 45):
//     echo "You are in 3rd Division";
// elseif($per < 33):
//     echo " You are Fail ";
// else:
//     echo "Please Enter Valid Percentage";
// endif;

// Switch Statement

// $weekday = 9;

// switch($weekday){
//     case 1:
//         echo "Today is Munday";
//         break;
//     case 2:
//         echo "Today is Tuesday";
//         break;
//     case 3:
//         echo "Today is Wednesday";
//         break;
//     case 4:
//         echo "Today is Thursday";
//         break;
//     case 5:
//         echo "Today is Friday";
//         break;
//     case 6:
//         echo "Today is Saturday";
//         break;
//     case 7:
//         echo "Today is Sunday";
//         break;
//         default:
//         echo "Enter the Valid Week Day";
// }

// $weekday = 3;

// switch($weekday){
//     case 1: case 2: case 3:
//         echo "Today is Munday";
//         break;
//     case 4:
//         echo "Today is Thursday";
//         break;
//     case 5:
//         echo "Today is Friday";
//         break;
//     case 6:
//         echo "Today is Saturday";
//         break;
//     case 7:
//         echo "Today is Sunday";
//         break;
//         default:
//         echo "Enter the Valid Week Day";
// }

// $age = 20;

// switch(true){
//     case ($age >= 15 && $age <= 20):
//         echo "You are Eligible";
//         break;
//     case ($age >= 21 && $age <= 38):
//         echo "You are not Eligible";
//         break;
//         default:
//         echo " Enter the Valid age";
    
// }

// Ternary Operator

// $x = 10;

// ($x > 20) ? $z = "Greater" : $z = "Smaller";
// $z = ($x > 20) ? "Greater" : "Smaller";
// $z = $x > 20 ? "Greater" : "Smaller";
// $z = "Value is : " . ($x > 20 ? "Greater" : "Smaller");

// echo $z;

// String Operator

// $a = "Hello Yaar";
// $b = $a . "Magistic";
// $b = "Magistic";
// $b .= "World";
// echo $b;

// While Loop

// $a = 15;

// while ($a >= 1) {
//     echo $a . "YoutubeLand<br>";
//     // $a = $a + 1;
//     $a--;
// }

// $a = 1;

// while($a <= 10){
//     echo $a . "YoutubeLand<br>";
//     // $a = $a + 1;
//     // $a= $a +2;
//     $a= $a +2;
// }

// Do While loop 

// $a = 1;

// do{
//     echo $a .  "Hello Ink Man<br>";
//     $a++;
// }while($a <= 10)

// For LOOP 

// for($a = 1; $a < 10; $a++){
//     echo $a . " " . "Hello InkMan<br>";
// }

// NESTED LOOP

// for($a = 1; $a <= 100; $a = $a + 10){
//     for($b = $a; $b < $a + 10; $b++){
//         echo $b . " ";
//     }
//     echo "<br>";
// }

// PHP Continue & Break Statement 

// for($a = 1; $a <= 10; $a++){
//     if($a == 3){
//         // continue;
//         break;
//     }
//     echo "Number: " . $a . "<br>";
// }

// PHP Goto Statement 

// echo "1";
// echo "2";
// goto xyz;
// echo "3";
// echo "4";

// xyz: echo "Fit Now";

// Functions

// function hello(){
//     echo "Hello Hi";
// }
// hello();

// function with parameters 

// function hello($name){
//     echo "Hello Hi . $name";
// }
// hello("Mr Finland");

// function varName($fname,$lname){
//     echo $fname.$lname;
// }
// varName("Tariq","Maqsood");

// function varName($fname="ABc",$lname="Xyz"){
//     echo $fname.$lname;
// }
// varName();

// function divide($a,$b){
//     echo $a / $b;
// }
// divide(30,10);

// function divide($a,$b){
//     echo $a / $b;
// }
// $a = 360;
// $b = 420;
// divide($a,$b);

// Functions with Returning Value

// function hello($fname,$lname){
//     $fullName = "$fname $lname";
//     return $fullName;
// }
// echo hello("Qasim","Bukhari");

// function hello($fname,$lname){
//     $fullName = "$fname $lname";
//     return $fullName;
// }
// $varName = hello("Nasheed","DotaCon");
// echo "Hi there $varName";

// function sum($math,$eng,$sc){
//     $subject = $math + $eng + $sc;

//     return $subject;
// }

// $total = sum(55,65,88);
// echo $total;

// function sum($math,$eng,$sc){
//     $subject = $math + $eng + $sc;
//     return $subject;
// }

// function percentage($subjectTotal){
//     $percentagE = $subjectTotal / 3;
//     echo $percentagE;
// }

// $total = sum(55,65,88);

// percentage($total);

// function sum($Algebra,$Math,$Calculas){
//     $TotalFamily = $Algebra + $Math + $Calculas;
//     return $TotalFamily;
// }

// function percentage($subjectTotal){
//     $peRcenTage = $subjectTotal / 3;
//     echo $peRcenTage;
// }
// $total = sum(55,65,88);

// percentage($total);

// PHP Function Argument By Reference

// function testing(&$string){
//     $string .= "GoodWin";
// }

// $str = "Mack";
// testing($str);
// echo $str;

// function first($num){
//     $num += 5;
// }

// function second(&$num){
//     $num += 7;
// }

// function third(&$num){
//     $num += 9;
// }

// $number = 10;
// first($number);
// echo $number."<br>";

// second($number);
// echo $number."<br>";

// third($number);
// echo $number."<br>";

// variable Function 

// function wow($a,$b){
//     echo $a+$b;
// };

// $func = "wow";
// $func(12,54);

// $Func = function($a,$b){
//     echo $a+$b;
// };
// $Func(43,76);

// PHP Recursive Function

// function display($number){
//     if($number <= 5){
//         echo "$number <br>";
//         display($number + 1);
//     }
// }
// display(1);

// factorial number recursive function method 

// function factorial($n){
//     if($n == 0){
//         return 1;
//     }else{
//         return ($n * factorial($n - 1));
//     }
// }

// echo factorial(5);

// PHP Global & Local Variable 

//Global Variable
// $a = 10;
// function test(){
//    global $a;
//    echo $a;
// }
// test()   // for the use global variable you will use global keywords
//echo $a; // <- here you can see this will not work 


// $a = 15;
// $b = 25;
// $c = 35;

// function test(){
//     global $a , $b , $c ;
//     $a = $a + $b ** $c ;
// }
// test();
// echo $a;

// Declare a global variable called $my_global_variable
// global $my_global_variable;

// // Set the value of the global variable
// $my_global_variable = "Hello, world!";
// echo $my_global_variable;


?>