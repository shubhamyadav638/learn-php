<?php
// ek arry ke andar bahut sare arry ho to usse multidimentinal arry bolte hai
// ya ek variable ke andar multiple array store ho use multidimensinal bolte hai

// syntax

// $array=[
//     [1,"user1","noida"],
//     [2,"user2","delhi"],
//     [3,"user3","gurugram"],
// ];


$array=[
    [1,"user1","noida"],
    [2,"user2","delhi"],
    [3,"user3","gurugram"],
];

// agar direct isko print karna ho to 
// echo $array;// ye error dega Array to string conversion 

//print_r($array); // ye pure array ko print kar dega 

// echo "<pre>";
// print_r($array);
// echo "<pre>";

// echo count($array);

for($a=0; $a<count($array); $a++){
//  print_r($array[$a]); // ye kewal array and object ke liye use hota hai yaha sabi array print hoga 
//  echo "<br>";
 for($j=0; $j<count($array[$a]); $j++){
    //  echo $array[$a][$j];
     print_r($array[$a][$j]);
    echo "<br>";
 }
}
?>