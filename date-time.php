<?php
//====================== date ================
// echo date('m'); /// month 09
// echo date('M'); /// month Sep
// echo date('m y'); /// month and year 09 25
// echo date('M Y'); /// month and year Sep 2025
// echo date('d m y');// date month year 26 09 25
// echo date('D M Y');// din month year Fri Sep 2025


/// ====================== time ================

// echo date('h'); //ye kisi or cuntory ka time hai Europe/Berlin11 by default hai
// echo date_default_timezone_get(); // isse pata kar sakte hai kaha ka time zone hai

date_default_timezone_set('Asia/Kolkata');// ye india ke hisab se hai 
// echo date('h');// ye 12 ke hisab se show karega  like 02
// echo date('H');// ye 24 ke hisab se show karega  like 14
// echo date('h:i');// hour then min 02:59
// echo date('H:I:s'); // 15:0:44 min ka ek digit de raha o9 tk 

// echo date('H:i:sa');//15:04:01pm sa me pm bhi aayega

echo date('H:I:SA'); //15:0:thPM
?>