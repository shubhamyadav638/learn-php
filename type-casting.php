<?php
// agar ek data type ko dusre data type me convert karte use type casting bolte hai 

// Change Data Type
// Casting in PHP is done with these statements:

// (string) - Converts to data type String
// (int) - Converts to data type Integer
// (float) - Converts to data type Float
// (bool) - Converts to data type Boolean
// (array) - Converts to data type Array
// (object) - Converts to data type Object
// (unset) - Converts to data type NULL ----- deprecated


// syntax

// $a = 5;
// $a = (string) $a;



$a = 5;
// $a = (string) $a;
// var_dump($a); // string(1) "5"

// $a = (float) $a;
// var_dump($a); // float(5)

// $a = (bool) $a;
// var_dump($a);// bool(true)  ye humesha true return karega bs agar 0 hua to false dega

// $a = (array) $a;
// var_dump($a);//ay(1) { [0]=> int(5) }

// $a = (object) $a;
// var_dump($a);///object(stdClass)#1 (1) { ["scalar"]=> int(5) }

// $a = (unset) $a;
// var_dump($a); // Fatal error:The (unset) cast is no longer supported in 
// $b = "shubham";
// $b = (int) $b;
// var_dump($b); //int(0)

// $str = "hello";
// $arr = (array)$str;

// print_r($arr);



$arr = ["apple", "banana", "orange"];
$str = (string)$arr;

echo $str; // warning Array to string conversion in 


?>