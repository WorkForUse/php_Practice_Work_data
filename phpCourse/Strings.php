<?php

// PHP String Str_split & Chunk_split Functio
// str_split(yeah string ko assoc array may return krdayga)
// str_split(string,length)
// is say hr string ki value ka index array bn jaega

// $str = "Jacob Line";
// // $newArr = str_split($str);
// $newArr = str_split($str,2);

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// for the hello change to He....ll~~o
// we will use chunk_split(string,legnth,end)

// $str = "Jacob Line";
// $newArr = chunk_split($str,3,"~");

// echo "<pre>";
// print_r($newArr);
// echo "</pre>";

// String LowerCase & UpperCase Functions
// PHP STRING FUNCTIONS =======
// 1)strtolower -> lower case
// 2)strtoupper -> upper case
// 3)ucfirst -> first uppercase
// 4)ucwords -> first word uppercase
// 5)lcfirst -> first word lowercase

// $str = "To do List";
// $newArr = strtoupper($str);
// echo $newArr;

// $str = "TO DO LIST";
// $newArr = strtolower($str);
// echo $newArr;

// $str = "lodash";
// $newArr = ucfirst($str);
// echo $newArr;

// $str = "Lodash";
// $newArr = lcfirst($str);
// echo $newArr;

// $str = "mongoose dash";
// $newArr = ucwords($str);
// echo $newArr;

// String Length & Count Functions
// strlen(string) // for the length this is use

// $str = "Lodash YodaCom";

// echo strlen($str);

// str_word_count(string,return) // return optional hai
// jab hum ismay 0 lagae gay return may to yeah hamay word count krkay daydayga aur jab hum 1 daalay gay to yeah hamay aik array return krdayga 2 jab dalay gay to hamay array kay saath key return krega

// $str = "Lodash | WOW";

// echo str_word_count($str);

// echo str_word_count($str,0); // 0 - returns the number of words found

// $newArr = str_word_count($str,1);
// // yeah aap ko array return krgega
// echo"<pre>";
//     print_r($newArr);
// echo"</pre>";

// $newArr = str_word_count($str,2);
// yeah aap ko array return krgega with keys/same position
// echo"<pre>";
//     print_r($newArr);
// echo"</pre>";

// for the word counting we use
// substr_count(string,substring,start,length)
// start aur length optional hai
// yeh substring ko count krta hai kay kitna baar ata hai

// $str = "Moongose Cryis is Wow Here Mongoose here Mongoose";

// echo substr_count($str,"Mongoose");
// echo substr_count($str,"Mongoose", 7);
// echo substr_count($str,"Mongoose", 1,11);

// PHP String Search & Find Position
// find position functions here -> strpos,strrpos,stripos,strripos
// strpos(string,find,start) // start optional hai
// strrpos(string,find,start) // yeah last say start krega
// stripos() yeah case-insentive hai
// strripos() yeah case-insentive hai reserve may

// $str = "Hello Jee Kaisay ho Jee Kaisay ho Jee";
// echo strpos($str,"Jee");
// echo strpos($str,"Jee",10);
// echo strpos($str,"Jee",-15); // reserve chalayga yeah
// echo strrpos($str, "Jee");
// for the case sensitive word search write this
// $str = "HeLLO jEE KaIsaY Ho";
// echo stripos($str,"jEE");
// echo strripos($str,"KaIsaY");

// String Search Functions // this all return strings

// strstr(string,search,before_search) before_search optional hai yeah true/false return krta hai 

// $str = "Hello world. The world is Nice";
// echo strstr($str,"world");
// true laganay say left say shoro krega search krna
// echo strstr($str,"world",true);

// strchr(string,search,before_search) before_search optional hai yeah true/false return krta hai SAME

// $str = "Hello world. The world is Nice";
// echo strstr($str,"world");
// true laganay say left say shoro krega search krna
// echo strstr($str,"world",true);


// strrchr(string,search,before_search) before_search optional hai yeah true/false return krta hai LIKEN RESERVE MAY

// $str = "Hello world. The world is Nice";
// echo strrchr($str,"world");
// ismay third parameter nhi hota like true/false

// stristr(string,search,before_search) before_search optional hai yeah true/false return krta hai MAGAR YEAH CASE SENSITIVE NHI HAI INSENTIVE HAI YEAH

// $str = "Hello world. The world is Nice";
// echo stristr($str,"tHe");

// strpbrk(string,characterlist) yeah sirf character ko search krta hai

// $str = "elo world wow now";
// echo strpbrk($str,"e");
// echo strpbrk($str,"ew");

// String Substr Function
// substr(string,start,length) yeah specific value ko choose krnay may kaam ata hai // length optional hota hai

// $str = "Hello world ~ The World is nice";
// echo substr($str,4);
// echo substr($str,-10);
// echo substr($str,0,10);
// echo substr($str,5,-3);
// echo substr($str,-5,-3);

// String Replace Functions=================

// str_replace(find,replace,string)

// $str = "Hello World Now";
// echo str_replace("World","earth",$str);
// echo str_replace("World","",$str);
// $find = ["Hello","World"];
// $replace = ["Hi","earth"];
// echo str_replace($find,$replace,$str);

// strtr(is may may , ~ space sab ko replace krsakta hai | string,replacement,start,length) length optional hota hai

// $str = 'I am not good oh shit not good';
// echo strtr($str,"not","Wai");

// $str = "Hi theree how are you doing";
// $arr = ["Hi"=>"Warid","how are you doing"=>"Kaisay Ho Tum Aaj"];
// echo strtr($str,$arr);

// str_ireplace(yeah same hai bss case insentive hai)

// $str = "Hello World Now";

// $find = ["Hello","WOrld"];
// $replace = ["Hi","earth"];
// echo str_ireplace($find,$replace,$str);


// subrtr(yeah character ko remove ya replace krnay kay kaam may ata hai | string,from, to) second syntax (string,array -> array assoc ho)

// $str = "hello yaar how are you doing today";
// echo substr_replace($str,"Fido_Dido",5,7);

// PHP String Compare Functions
// strcmp(string1,string2)
// strcasecmp(string1,string2)
// strncmp(string,string2,length)
// strncasecmp(string1,string2,length)
// substr_compare(string1,string2,start,length,case | length optional hai)
// similar_text(string1,string2,percent -> optional)

// echo strcmp("Hello World","Hello World");
// echo strcmp("Hello World","Hello");
// echo strcmp("Hello World","Hello World O");

// echo strncmp("Hello WWorld","Hello WWorld",5);

// echo strcasecmp("Hello WWorld","Hello WWORLD",);

// echo strncasecmp("Hello WWorld","Hello WWORLD",4);

// echo strnatcmp("2He","10He");
// echo strnatcmp("12He","10He");
// echo strnatcmp("10He","10He");

// echo strnatcasecmp("2 Jayeooo","2 JAYEOOo");

// echo substr_compare("hello world","world",6,);
// echo substr_compare("hello world","world",6,5);
// echo substr_compare("hello world","world",0);
// echo substr_compare("hello world","world",-2,2);
// echo substr_compare("World","world",-2,2,TRUE);

// echo similar_text("Teenage Mutant","CHeeatah Squad");
// echo similar_text("Teenage Mutant","CHeeatah Squad",$per);
// echo "Percentage :" . $per;

// String Strrev & Str_shuffle==========
// strrev(string) reserve kay lye
// str_shuffle(string)

// echo strrev("Yahoo Engine");
// echo str_shuffle("Yahoo Engine");

//tring Str_Pad & Str_Repeat Functions=====================

// hello into change hello... isko padding kehtay hai str_pad(string,length,pad_string,pad_type)
// pad_type -> 1)STR_PAD_BOTH 2) STR_PAD_LEFT 3)(STR_PAD_RIGHT{Default})

// $str = "Jacob Line";
// echo str_pad($str,15,"_`_-~");
// echo str_pad($str,15,"_`_-~",STR_PAD_LEFT);
// echo str_pad($str,15,"_`_-~",STR_PAD_BOTH);
// echo str_pad($str,15,"_`_-~",STR_PAD_RIGHT);

// str_repeat(string,repeat->numeric value)
// $str = "Jacob Line";
// echo str_repeat($str,7);

// PHP String Trim & Chop Functions========================

// trim(string,charlist->delete)
//rtrim(string,charlist)
//ltrim(string,charlist)
//chop(string,charlist) yeah sirf right say hi trim krtah hai

// $str = "Lodash Backlash";
// echo trim($str,"sh");
// yeah actually last aur start say hi trim krta hai bss
// $str = "RTrim Kah";
// echo rtrim($str,"Kah");
// echo ltrim($str,"RT");

// $str = "Lodash Backlash";
// echo chop($str,"Backlash");
// yeah sirf right say hi trim krta hai

// $str = "yahoo Backlash ";
// echo chop($str);
// this syntax just for remove spaces

// PHP String Addslashes & Stipslashes Functions
// addslashes(string) yeh hacker say bachata hai
// stripslashes(\\ hatanay kay kaam ata hai)
// stripcslashes(\\ hatanay kay kaam ata hai liken specific jgha kay lye)
// agar specific jgha pr \\ lagana chahtay hotu use kro addcslashes(string,characters)

// $str = "Hello I am 'Onum' Kapoorious";
// echo addslashes($str."<br>");
// echo addcslashes($str,"um"."<br>");
// echo addcslashes($str,"A..Z"."<br>");
// echo addcslashes($str,"a..z"."<br>");
// echo addcslashes($str,"a..s"."<br>");
// $newStr = addcslashes($str,"a..s"."<br>");
// echo stripcslashes($newStr);
// echo stripslashes($str);

// Htmlentities & Htmlspecialchars ======================

// htmlentities(string,flags)
// yeah special characters ko html entities may change krdayna ga 
// entities code ko dobara decode krna kay lye aap ▶ html_entity_decode(string,flags) ◀ iska use krogay
// flags may yeah 3 method use hotay hai ENT_COMPAT(default same as ENT_QUOTES) , ENT_QUOTES, ENT_NO QUOTES

// == decodes == 

// $str = "<a href='https://www.youtube.com'>Youtube</a>";
// $htmlent = htmlentities($str,ENT_COMPAT);
// echo $htmlent;
// echo html_entity_decode($htmlent);
// echo htmlspecialchars_decode($htmlent);

// ===============

// == this is for checking hamaray kitnay special char hai == 

// echo "<pre>";
// print_r(get_html_translation_table(HTML_SPECIALCHARS)); 
// print_r(get_html_translation_table(HTML_ENTITIES));
// echo "</pre>";

// ==========

// $str = "<a href='https://www.youtube.com'>Youtube</a>";

// echo htmlentities($str);
// echo htmlentities($str,ENT_QUOTES); // only for quotes " '
// echo "<br>";
// echo htmlentities($str,ENT_NOQUOTES); // only for special char

// Htmlspecialchars yeah same work krta hai bss yeah specific characters pr hi use hotay hai
// iskay saath htmlspecialchars_decode(string,flags) use hota hai

// echo htmlspecialchars($str,ENT_QUOTES); // only for quotes " '
// echo "<br>";
// echo htmlspecialchars($str,ENT_NOQUOTES); // only for special char

// Md5 & Sha1 Function ===================
// md5 stands for Message-Digest Algorithm
// md5(string , raw basically binary number return krni hai 16 char ka , 32 char ka hex)
// yeah basically form ki information ko protect rkhnay kay lye use hot hai 

// $str = "Hello World";
// echo "The string : " . $str . "<br><br>";

// echo "md5 Binary : " . md5($str,TRUE) . "<br><br>";
// echo "md5 HEX : " . md5($str,FALSE) . "<br><br>";


// sha1 stands for Secure Hash Algorithm 1
// sha1(string , raw same as Md 5 but that's too strong yeah 20 number ka binay number dayga aur false may 40 char ka hex number)

// $str = "Hello World";
// echo "The string : " . $str . "<br><br>";

// echo "sha1 Binary : " . sha1($str,TRUE) . "<br><br>";
// echo "sha1 HEX : " . sha1($str,FALSE) . "<br><br>";

// Convert_uuencode & Convert_uudecode ==================
// yeh string ko aik unnecode may encrypt change krdayta hai 
// convert_uudecode(string) -> for example unicode hello change to +2&5l;&\ yeah message ko secure rkhnay may kaam ata hai 

// $str = " What was the last time seeing ";
// $encrypteStr = convert_uuencode($str);
// echo $encrypteStr;
// echo "<br>";

// Decrypt means dobara normal krnay kay lye hum Convert_uudecode use kraygay

// $decrypteStr = convert_uudecode($encrypteStr);
// echo $decrypteStr;

// bin2hex & hex2bin================================= this is use for security purpose
// bin2hex(string) -> convert binary to hex

// echo bin2hex("Hello World");

// hex2bin(string) -> convert hex to binary

// $str = bin2hex("Hello Yaar Ho r u Earth");
// echo $str;

// echo hex2bin($str);

//  Chr & Ord Function =====================
// chr(ascii) change to character

// $str = chr(65);
// echo $str;

// ord(string) change to ASCII

// $ascIi = ord('NAK');
// $ascIi = ord('Blueberry'); // isnay sirf bhi ki return ki first value ko read kia bs 
// echo $ascIi;

// Strip_tags & Wordwrap
// strip_tags(string,allow optional hai for example specific tag hi phir remove hoga)

// $str = "Hello <b>World</b>, Hello <i>Earth</i>";
// echo $str . "<br>";
// echo strip_tags($str);
// echo strip_tags($str,"<i>");

// wordwrap(string,width,break,cut[true-wrap/false-nowrap phir yeah space kay baad hi break krega]) yeah string ko break krnay kay lye kaam ata hai

// $str = "This is Earth is Mine mineeee........mineeeesa blackmessa OW";
// echo wordwrap($str . "<br>");
// echo wordwrap($str,4,"<br>",true);
// echo wordwrap($str,4,"<br>",false);



?>