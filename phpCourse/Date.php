<?php
    // in day (d start 01 to 31 / j start 1 to 31 / S follow suffix like rd nth nd st)
    // month [f will show january - m (01) M - (jan) n(1)]
    // Year will return Y(2019) y (19)
    // Week D(Mon) I(Monday) N(1) w(1 this will start sunday to saturday 0 to 6)

    // echo "Today is " . date("d") . "<br>";
    // echo "Today is " . date("j") . "<br>";
    // echo "Today is " . date("jS") . "<br>";

    // echo "Month is " . date("F") . "<br>";
    // echo "Month is " . date("m") . "<br>";
    // echo "Month is " . date("n") . "<br>";
    // echo "Month is " . date("M") . "<br>";

    // echo "Year is " . date("Y") . "<br>";
    // echo "Year is " . date("y") . "<br>";
    
    // Print FUll DATE METHOD
    // echo "FULL DATE is " . date("d/m/Y") . "<br>";
    // echo "FULL DATE is " . date("d-m-Y") . "<br>";
    // echo "FULL DATE is " . date("Y-m-d") . "<br>";
    // echo "FULL DATE is " . date("Y-M-d") . "<br>";

    // Week Print

    // echo "WeEk Day is " . date("D") . "<br>";
    // echo "WeEk Day is " . date("l") . "<br>";
    // echo "WeEk Day is " . date("N") . "<br>";
    // echo "WeEk Day is " . date("w") . "<br>";
    
    // bonus 4 date methods
    // echo " Day in a Year " . date("z") . "<br>";
    // echo " Weeks of the YEar " . date("W") . "<br>";
    // echo " Days of the Month " . date("t") . "<br>";
    // echo " Is this is Leap Year " . date("L") . "<br>";

    // leap year 4 saal baad ata hai leap year may 366 days hotay hai aur febuary may is saal 29 days hotay hai agar to leap year hoa to uppr waali value 1 return kregi else nhi hoa to zero return kregi

    // ========= Time FUNCTIONS METHOs ============
    // hour methods h(start 01 to 12) H(start 00 to 23) g(start 1 to 12) G(start 0 to 23)

    // Minuts methods i(start 00 to 59)

    // Seconds Methods s(start 00 to 59)

    // Meridiam [AM or PM] a(am or pm) A(AM or PM)

    // echo "Hour is " . date("h") . "<br>";
    // echo "Hour is " . date("H") . "<br>";
    // echo "Hour is " . date("g") . "<br>";
    // echo "Hour is " . date("G") . "<br>";

    // echo "Minutes is " . date("i") . "<br>";

    // echo "Seconds is " . date("s") . "<br>";

    // echo "Meridiem is " . date("a") . "<br>";
    // echo "Meridiem is " . date("A") . "<br>";

    // hour minutes seconds together

    // echo "Time is " . date("h:i:s:a") . "<br>";
    // echo "Time is " . date("H:i:s:a") . "<br>";

    // echo "Time & Date is " . date("d-m-Y | h/i/s:a") . "<br>";
    
    // echo "Time & Date is " . date("d-m-Y | h/i/s:a | e") . "<br>";
    // e say wahan ki location dekhaega jahan ka time set hai

    // Time Hour Fix Solve krnay ka Method
    // for the timezone set you can go this official website https://www.php.net/manual/en/timezones.asia.php

    // date_default_timezone_set("Asia/Karachi");

    // echo "Time is " . date("h/i/s:a e") . "<br>";

    // PHP server hour dikhata hai means europe ka dekha rha hai default server

    // ========= Mktime & Gmmktime Function [Past Time Set Function hai yeah dono 2] ========
        // past time show krwana hai to yeah Mktime work krta hai 
        // mktime(hour,minute,second,month,date,year)
        // mktime stands for make time
        // now date will work like this date(format , timestamp -> matlab poorani date)

        // echo "Time & date : " . date("d-m-Y h:i:sa") . "<br><br>";

        // echo date("l", mktime(0,0,0,9, 13, 2007));
        // echo date("d-m-Y", mktime(0,0,0,9, 13, 2007));
        // echo date("d-m-Y | m/i/s/a", mktime(0,0,0,9, 13, 2007));

        // gmmktime stands for GMT date(Greenwich Mean Time)

    //    echo "Time & date : " . date("d-m-Y h:i:sa") . "<br><br>";

    //    echo "d-m-Y h:i:sa", gmmktime(0,0,0,10, 15, 2002);

    // ========== Date_create & Date_format Function ========== | Future Date Set Function hai Yeah
        // date_create(time,timezone)
        // date_format(object,format)
    
    // $Object_return = date_create("2077-07-13");

    // $Object_return = date_create("2077-07-13 18:30:00");

    // $Object_return = date_create("2077-07-13 18:30:00", timezone_open("Asia/Karachi"));

    // timezone open say date nhi change hoti bss time tohra buhat change hojata hai us zone say related

    // echo date_format($Object_return,"l");
    // echo date_format($Object_return,"l/d/m/Y | H:i:s [A]");

    ///// PHP Checkdate & Date_diff Function //////
    // yeah function islye hota hai kay date month year valid hai ya nhi return true/false return krega
    // checkdate(month,day,year)
    // invalid day -> 35,16,19244

    // echo checkdate(2,15,2014);
    // echo checkdate(2,29,2024);

    // 2013-03-15 ko 2013-12-12 in dono ka difference nikalna chahtay hotu aap date_diff() use krogay
    // date_diff(datetime1,datetime2,absolute -> optional hai default false hoti hai TRUE agar return krogay to negative ko show nhi krega)

    // $date1 = date_create("2013-03-15");
    // $date2 = date_create("2013-11-09");

    // $different_dikhao = date_diff($date1,$date2);

    // echo "<pre>";
    //     print_r($different_dikhao);
    // echo "</pre>";
    // echo "<br>";

    // echo $different_dikhao->days;
    // echo $different_dikhao->days . "days";

    // echo "<br><br>";

    // $date1 = date_create("2013-11-09");
    // $date2 = date_create("2013-03-15");

    // $different_dikhao = date_diff($date1,$date2);

    // formats codes %R R -> negative / positive show krta hai
    // echo $different_dikhao->format("%r%m%d years");

    // echo "<pre>";
    //     print_r($different_dikhao);
    // echo "</pre>";


    // ==== PHP Date_add, Date_sub & Date_modify Function ====
    // date_add(object,interval) // adding method
    // date_sub(object,interval) // minus method
    // date_modify(is may aap add minus dono krsaktay ho)

    // $date = date_create("2015-05-15");
    // date_add($date, date_interval_create_from_date_string("30 days"));
    
    // echo date_format($date , "d-m-Y");

    // $date = date_create("2015-05-15");
    // date_sub($date, date_interval_create_from_date_string("30 days"));
    
    // echo date_format($date , "d-m-Y");

    // $date = date_create("2015-05-15");
    // date_modify($date, "2 months");
    // date_modify($date, "-2 months");
    
    // echo date_format($date , "d-m-Y");

    // ======================================= PHP Getdate, Localtime, Gettimeofday Function ===========================================
    // print_r(getdate(agar koi parameter nhi pass krta to current date return krega))

    // $olddate = mktime(0,0,0,05,13,2007);

    // echo "<pre>";
    // print_r(getdate($olddate));
    // echo  "</pre>";

    // $date = getdate($olddate);
    // echo $date['month']. " - " . $date['year'];

    // echo "<pre>";
    // print_r(gettimeofday());
    // echo "</pre>";
    
    // $date = gettimeofday();
    // echo $date['sec'];
    
    // echo gettimeofday(true); // istrha yeah float may sab kuch return krdega kuch istrha 1700847708.8751;
    
    // $olddate = mktime(0,0,0,03,15,2015);

    // echo "<pre>";
    // print_r(localtime());
    // print_r(localtime(time(),true));
    // print_r(localtime($olddate,true));
    // echo "</pre>";

    // ======= PHP Date_parse ======== 

    // echo "<pre>";
    // print_r(date_parse("2015-05-13 12:30:25.5"));
    // echo "</pre>";

    // // for the see specific date
    // $date = date_parse("2015-05-13 12:30:25.5");
    // echo $date['day'];

    // ============================

    // echo "<pre>";
    // print_r(date_parse_from_format("mmddyyyy","05122007"));
    // print_r(date_parse_from_format("d.n.Y","15.3.2007"));
    // echo "</pre>";

    // NEXT 94 VIDEO HAI
    // string to time converter 
    // strtotime(time)

    // echo(strtotime("now"));
    // echo date("D-M-Y",strtotime("now"));
    // echo date("D-M-Y",strtotime("3 April 2007"));
    // echo date("D-M-Y | h/m/s",strtotime("3 April 2007"));
    // echo date("D-M-Y | h/m/s",strtotime("+2 months 5 days"));
    // echo date("D-M-Y | h/m/s",strtotime("last month"));
    // echo date("D-M-Y | h/m/s",strtotime("first day of last two months"));

    // strinf format time 
    // strftime(format,timestamp)

    // echo strftime("%b %d %y, %x %Z") . "<br>";
    // echo strftime("%b %d %y, %x %Z", mktime(21,45,00,03,17,2007)) . "<br>";
    // echo strftime("%d %m %Y, %H %M %S", mktime(21,45,00,03,17,2007)) . "<br>";
    // echo gmstrftime("%d %m %Y, %H %M %S", mktime(21,45,00,03,17,2007)) . "<br>";

    // PHP Date_time_set Function=======================
        // date_time_set(object,hour,minute,second,microseconds optional hai)

    // $date = date_create("2007-03-12");

    // date_time_set($date,14,30);

    // echo date_format($date,"d-m-y H:i:s") . "<br>";

    // date_time_set($date,05,20,45);
    // echo date_format($date, "d-m-Y H:i:s") . "<br>";

    // PHP TimeZone ==================================

    // echo date_default_timezone_set("Asia/Karachi");
    // echo date_default_timezone_get();

    // $tz = timezone_open("Asia/Karachi");
    // echo timezone_name_get($tz);

    // echo "<pre>";
    // print_r(timezone_location_get($tz));
    // echo "</pre>";

    // echo "<pre>";
    //     print_r(timezone_identifiers_list());
    // echo "</pre>";
    echo "<pre>";
        print_r(timezone_identifiers_list(16));
    echo "</pre>";
    
    

?>