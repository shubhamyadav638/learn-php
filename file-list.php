<?php
$path="files";
$item=scandir($path);
// print_r($item);// Array ( [0] => . [1] => .. [2] => demo [3] => dummy.txt )  isme single dot(.) and dubble dot(..) aate hai jaise hum scan karte hai to pahle remove karna padta hai
echo "</br>";
$removedot= array_diff($item,array(".",".."));
// print_r($removedot);//Array ( [2] => demo [3] => dummy.txt ) demo

foreach($removedot as $items){
    // echo $items;// isme to kewal us folder ke andar ki files ka name dikhega iske andar ke content ko read karna hai 

    echo "<a href=files/$items>$items</a>"; // ya hum uspe click karke open kar sakte hai


    echo "</br>";
}
?>