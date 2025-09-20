<?php
// $GLOBALS kya krta hai jo global variable hote hai jo function me nahi hote usko access karta hai agar koi or file include hui to uska bhi varible dikhega 

// const varible nahi dikhata hai ye 
// $a = 10;
// const b = "20";// ye show nahi hoga 
// function data(){
//     $shubham = "shu";// ye nahi hoga show
// }
// data();
// $shubham = "shu"; // ye show hoga 

// echo "<pre>";
// print_r($GLOBALS);
// echo "<pre>";

// server pura infmation deta hai server project ka url and path
// echo "<pre>";
// // print_r($_SERVER);// ye pure server ka data deta hai 

// print_r($_SERVER["REQUEST_URI"]);// specific data ke liye 
// echo "<pre>";


// $_REQUEST ye get or post dono pe chlta hai or data show karta hai

// $_GET ye kewal get method ka data print karega ya layega 

// $_POST ye kewal post method ka data print karega ya layega 

// $_FILES // jb hum files upload karne ki kosis karte hai kisi serve ke uper to uske uper dikh jata hai 

// $_ENV // jo encirnment use kar rahe hai uska pura  information  data hai


// $_COOKIE // jo browser ke andar data save karna chahte hai to wo iske andar jati hai  

// $_SESSION // ek page ke uper data tha use store kar liya agar use dusre tisre tab me open karne ki kosis kar rahe hai same project ko user ke dekh rahe hai login hai ya nahi tb hum session ki help se karte hai session ke andar data maintaind rahta hai data khota nahi  
?>