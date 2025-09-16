<?php
// jb array ke uper looping karna ho ya bol skte hai jab ek array ke element ko display karana ho to foreach 

// ye easy to use hota hai or isme hume element ko count wagaira karene ki jarurat nahi hoti

// foreach ka use multiple means multidimentinal array ke sath use kar skte hai

 // ek foreach ke andar dusra foreach ho skta hai ha nested foreach ho sakte hai

//syntax

// $users =["syam","ram","krishna", "mohit"];
// foreach($users as $x){
//     echo $x;
// }

$users = ["Shubham", "Rahul", "Amit", "Priya","1","2"];

// first method to print all array items

//  foreach($users as $x){
//     echo $x;
//     echo "<br>";
// }

// second method to print all array items

// foreach($users as $x):
// echo $x;
// echo "<br>";
// endforeach;

// priya tk hi print kare bbaki ka na kare 
// foreach($users as $x){
//     echo $x;
//   echo "<br>";
//     if($x=="Priya"){     
//         break;
//     }
// }


// rahul ko chod kar baki sb print kare 


// foreach($users as $x){
//     echo $x;
//   echo "<br>";
//     if($x=="Rahul"){     
//         continue;
//     }
// }




?>