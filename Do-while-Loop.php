<?php
// how to work while loop
//1. declare initial value (starting point)
//2. condition(stop)
//3. increment or decrement

// syntax
//  initilisation variable

// do {
//     // increment/decrement
// }while(condition)


// $num=10;
// do{
//     echo "$num <br>";
//     $num++;
// }while($num<20)

// $num=10;
// do{
//     echo "$num t <br>";// 10 se 19 tk hoga 
//     $num++;
//      echo "$num <br>"; //11 se 20 tk 
// }while($num<20)

$num=10;
do{
    echo "$num <br>";
    $num--;
}while($num>0) //op 10  ec baar to chlega hi loop chahe wo condion false kyu na ho
?>